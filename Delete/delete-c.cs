using System.Collections.Specialized;
using System.Net;
using System.Web.Script.Serialization;
using System.IO;

 using (WebClient client = new WebClient())
            {
                string tokenid = "xxxxx-xxxx-xxxxx-xxxxx"; //זה של dev אז להחליף לפני שמעלים
                string objectid = "xxxxx-xxxx-xxxxx-xxxxx";
                client.Encoding = System.Text.Encoding.UTF8;
                client.Headers.Set("tokenId", tokenid);
                string result = client.UploadString("https://secure.powerlink.co.il/api/record/account/" + objectid, "DELETE", "");
            }
