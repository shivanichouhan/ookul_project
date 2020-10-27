// configure express
var express = require( "express" );
var path = require('path')
var app = express();
app.use( express.urlencoded() );
app.use(express.static(path.join(__dirname, 'ookul_elearning/elearning')));


app.get('/payment', (req, res) => {
    res.sendFile(path.join(__dirname + '/ookul_elearning/elearning/ookul_cheakout.html'));
  });

// get and config the module
var Payments = require( "node-payments" );
// inject and reuse a existing express
var paymentConfig = { express: app, paymentStore: new Payments.RedisHashStore() }
var pymts = new Payments( paymentConfig );

// listen to events

// the event fired for a succesfull provider payment
pymts.on( "approved", function( res, payment ){
    // use the express response object to generate the page after retuning from the providers page
    res.send( "Thank you!" );
});

// the event fired for a canceld provider payment
pymts.on( "cancel", function( res, payment ){
    // use the express response object to generate the page after a canceld payments by/within the providers page
    res.send( "What a pity!" );
});

// the event fired for a successfull verify by a message service ( e.g. PayPal-IPN or ClickandBuy-MMS ).
pymts.on( "verfied", function( payment ){
    console.log( "PAYMENT VERIFIED\"n", payment.valueOf() );
});

// the event on every change of a payment
pymts.on( "payment", function( type, payment ){
    console.log( "PAYMENT ACTION: \n", payment.valueOf() );
});



// listen for pay requests ( e.g. "www.mysite.com/pay/paypal"
app.get( "/pay/:provider/:cid", function( req, res ){
    // Get thh service provider
    pymts.provider( req.params.provider, function( err, provider ){
        if( err ){
            console.log( err );
            res.send( "ERROR", 500 );
        }
        
        // create a payment instance
        var payment = provider.create()
        
        // set some parameters
        payment.set({
            amount: 1.00,
            curreny: "EUR",
            desc: "Imperial Star Destroyer",
            // you can define your own attributes
            my_custom_id: req.params.cid
        });
        
        payment.execute( function( err, link ){
            if( err ){
                console.log( err );
                res.send( "ERROR", 500 );
            }
            // redirect to the providers login page
            res.redirect( link );
        });
    });
});

// start express. Make sure you start listening after node-payments has been configured.
var _port = 8080;
console.log( "listen to", _port );