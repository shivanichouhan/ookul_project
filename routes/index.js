const fs = require('fs');
const readline = require('readline');
const { google } = require('googleapis');
const { json } = require('body-parser');
const { event } = require('jquery');
const { resourceUsage } = require('process');
require('dotenv').config();

// const CREDENTIAL = JSON.parse(process.env.CREDENCIAL);
const calender_id = ''
// If modifying these scopes, delete token.json.
const SCOPES = 'https://www.googleapis.com/auth/calendar';
const calendar = google.calendar({ version: 'v3' })

const auth = new google.auth.JWT(
    "google-calender-api@quickstart-1604483303686.iam.gserviceaccount.com",
    null,
    "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDXKrUtK+6k6mI0\nOSm6w9kBbIVPQGSMe3Cp+3Mu8Vu+0km2SlbZ+92Bf7YMmx0a3G409/30cGqcGoHK\nGv5Q1qgbPIxAQlp9dw+e8GqsRVz2D9rkRCNtlo1LCLv3NU3YwNHLPJhFjYL3WDxY\nGj6y0ztc+6pe1UTtkbVeedAi7PRu9eyBDCtGXERG9EjRYHpyXEenkvyFZ4/nGa9v\nYfFCgm0o7rNfOlg8m3tBbl780Ky0TAGSXGtqMYKYMPufFSd5eR6VWr2B6UtP2MuU\nCpclb/fVE85fiOjEskqUpTMPy8bUSunEyX57ONzM7cLI1NLH2EUi+kwOTHrWBOYv\n8gxx5GwfAgMBAAECggEASbsjSX7f8Jg2nbGm6I57Gr9OsTkeG3ujQERflIr1ht61\njqdLurfRkDIstoYiw5UcmL8QQYaSKbr1lcWJNzdPdMHbR5vVOWAmtK6qxyyfrdwC\nBK2KvF9WPIuaKZyU9/0fBvdVMKRM6ChOyVv49ztmALdmisenLod7MIwqdAVhv3GZ\nwu+/uEbwPj6L0KYNe4gcARcDTpKZP67Y8cPkrvD/rqggj+qZaNP+1OsMebnnHMIo\nTiZ+F0o2SIBLoL5eVYO4eb59yHOV4PSTgu0h8LAX9du0Sn6qulDTi3O4fSU6bplq\nK47a4IslGuZfLTdNtJq6CsIxFl9I1swH4PNIWxVOBQKBgQD+UQnJDgo30oJQIxrt\nC7s7D9zwI2PXtMEldIhmPlGR9A16IH4ZJdyHiIVr8P9TsDpTorSoGlR8ah2OLh94\nIdvMil1GhhgpnzrdaZ1+mn6A/tiYcBE+2aeBsUjxsWF5xMzKtxtcUQrm/yup9NlJ\nt7UY0UmvL4WKNelO5kGqMUTefQKBgQDYl1OrnTmzEh9zfS6cF/kKQOTPPGo8TNBf\nbkCmfwzvhii2PmLFAMlFtQYvI+OIDaWoqom0tkEUq/mD8WsnaCSVtaqo7i3ceQu5\nIWKGR75wb8odzneHtYEw4X/PetZB3kz5zncNf7ye705+5vT52sQ/2KY8RwZ3RHbq\nHwOLQd0rywKBgAD3W9sos388zIPzbjHCXqa9y7AZ4lI6fJVg2PfSesrcK4TwRKph\ny3G0YhVj6ARwYfhZYOhWmUWTvaMBp9rz/frL98jBz6uw0C9xLEkD20EwNrB1lIsx\nloJWoxlP/DfTOJf4lCEIqcrw40CVDpJKIWUDvozs2EwLImTLWSqFX2adAoGBAM5K\nM3L86PvZgwMoc8BQRO6zKDsJu9V7A+wgworR76wjB5ush75DJXCzHhTABfKLrQCc\njVQFUq8xrREyW3DJDC9bPBRx5lRbJgNJ/OEQbB4DG2qQP+CNy2KXJHik8nUCGibD\nszi0NR7bptPPffyLlOeKnapDq7DlEK2kpGd6cAFJAoGAZh5NldkLd23u7w/uH/wx\nDpa7Xe2rXHxbq5vikSJXlcfDHuxHvj6v/T4knSOhXEk4r1mWAfdrbGZuQLhrvEPI\n9YDcZ1ClqueWMaeAPYDsndkdgNWS7KYZtE6az/2sNxFzA0L41V1gwc0iA2gjE2sz\nvKpVP0gxu+hQ/kbtKUv9hn0=\n-----END PRIVATE KEY-----\n",
    SCOPES
);
// The file token.json stores the user's access and refresh tokens, and is
// created automatically when the authorization flow completes for the first
// time.
const TIMEOFFSET = '+05:30';

const dateTimeForCalender = () => {
    let date = new Date();
    let year = date.getFullYear();
    let month = date.getMonth() + 1;
    if (month < 10) {
        month = `0${month}`
    }
    let day = date.getDate();
    if (day < 10) {
        day = `0${day}`
    }
    let hour = date.getHours();
    if (hour < 10) {
        hour = `0${hour}`;
    }
    let minuts = date.getMinutes();
    if (minuts < 10) {
        minuts = `0${minuts}`
    };
    let newDateTime = `${year}-${month}-${day}-T${hour}:${minuts}:00.000${TIMEOFFSET}`;
    console.log(newDateTime)
    let event = new Date(Date.parse(newDateTime));
    console.log(event)
    // let startDate = event;
    // console.log(startDate)
    let endDate = new Date(new Date(newDateTime).setHours(newDateTime.getHours() + 1));
    return {
        "start": newDateTime,
        "endDate": endDate
    }
}
console.log(dateTimeForCalender(), "************")

const insertEvent = async (event) => {
    try {
        let response = await calendar.events.insert({
            auth: auth,
            calenderId: '4bv21tok1171k02n1k1jkqlpa8@group.calendar.google.com',
            resource: event
        });
        if (response['status'] == 200 && response['status']) {
            return 1;
        } else {
            return 0;
        }
    } catch (error) {
        console.log(`error at inserEvent --> ${error}`);
        return 0;
    }
}


let dateTime = dateTimeForCalender();
let event = {
    'summary': "shivani",
    'description': 'this is shivani desc',
    'start': {
        'dateTime': dateTime['start'],
        'timeZone': 'Asia/Kolkata'
    }, 'end': {
        'dateTime': dateTime['endDate'],
        'timeZone': 'Asia/kotkata'
    }
}




// const TOKEN_PATH = 'token.json';

// // Load client secrets from a local file.
// fs.readFile('credentials.json', (err, content) => {
//   if (err) return console.log('Error loading client secret file:', err);
//   // Authorize a client with credentials, then call the Google Calendar API.
//   authorize(JSON.parse(content), listEvents);
// });

// /**
//  * Create an OAuth2 client with the given credentials, and then execute the
//  * given callback function.
//  * @param {Object} credentials The authorization client credentials.
//  * @param {function} callback The callback to call with the authorized client.
//  */
// function authorize(credentials, callback) {
// //   const {client_secret, client_id, redirect_uris} = credentials.installed;
//   const oAuth2Client = new google.auth.OAuth2(
//     "149941227447-ipadjcr67dto6kmdsjbt24ahq8vgq3fs.apps.googleusercontent.com", 'hUs3udqwwyUfw7X696mepGG-', "http://localhost:3000/e_productivity.html");

//   // Check if we have previously stored a token.
//   fs.readFile(TOKEN_PATH, (err, token) => {
//     if (err) return getAccessToken(oAuth2Client, callback);
//     oAuth2Client.setCredentials(JSON.parse(token));
//     callback(oAuth2Client);
//   });
// }

// /**
//  * Get and store new token after prompting for user authorization, and then
//  * execute the given callback with the authorized OAuth2 client.
//  * @param {google.auth.OAuth2} oAuth2Client The OAuth2 client to get token for.
//  * @param {getEventsCallback} callback The callback for the authorized client.
//  */
// function getAccessToken(oAuth2Client, callback) {
//   const authUrl = oAuth2Client.generateAuthUrl({
//     access_type: 'offline',
//     scope: SCOPES,
//   });
//   console.log('Authorize this app by visiting this url:', authUrl);
//   const rl = readline.createInterface({
//     input: process.stdin,
//     output: process.stdout,
//   });
//   rl.question('Enter the code from that page here: ', (code) => {
//     rl.close();
//     oAuth2Client.getToken(code, (err, token) => {
//       if (err) return console.error('Error retrieving access token', err);
//       oAuth2Client.setCredentials(token);
//       // Store the token to disk for later program executions
//       fs.writeFile(TOKEN_PATH, JSON.stringify(token), (err) => {
//         if (err) return console.error(err);
//         console.log('Token stored to', TOKEN_PATH);
//       });
//       callback(oAuth2Client);
//     });
//   });
// }

// /**
//  * Lists the next 10 events on the user's primary calendar.
//  * @param {google.auth.OAuth2} auth An authorized OAuth2 client.
//  */
// function listEvents(auth) {
//   const calendar = google.calendar({version: 'v3', auth});
//   calendar.events.list({
//     calendarId: 'primary',
//     timeMin: (new Date()).toISOString(),
//     maxResults: 10,
//     singleEvents: true,
//     orderBy: 'startTime',
//   }, (err, res) => {
//     if (err) return console.log('The API returned an error: ' + err);
//     const events = res.data.items;
//     if (events.length) {
//       console.log('Upcoming 10 events:');
//       events.map((event, i) => {
//         const start = event.start.dateTime || event.start.date;
//         console.log(`${start} - ${event.summary}`);
//       });
//     } else {
//       console.log('No upcoming events found.');
//     }
//   });
// }
// // [END calendar_quickstart]

// module.exports = {
//   SCOPES,
//   listEvents,
// };