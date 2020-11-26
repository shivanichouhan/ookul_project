using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Page2 : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!this.IsPostBack)
        {
            if (!string.IsNullOrEmpty(Request.Form["name"]) && !string.IsNullOrEmpty(Request.Form["technology"]))
            {
                Response.Write("<u>Values using Form Post</u><br /><br />");
                Response.Write("<b>Name:</b> " + Request.Form["name"] + " <b>Technology:</b> " + Request.Form["technology"]);
            }
        }
    }
}