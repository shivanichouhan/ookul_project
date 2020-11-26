<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Page2.aspx.cs" Inherits="Page2" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        var queryString = new Array();
        function FetchQueryString(key) {
            if (queryString.length == 0) {
                var params = window.location.search.split('?')[1].split('&');
                for (var i = 0; i < params.length; i++) {
                    var key = params[i].split('=')[0];
                    var value = params[i].split('=')[1];
                    queryString[key] = val;
                }
            }
            return queryString[key];
        }
    </script>
    </form>
</body>
</html>
