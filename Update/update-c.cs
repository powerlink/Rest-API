using System.Collections.Specialized;
using System.Net;
using System.Web.Script.Serialization;
using System.IO;

using (WebClient client = new WebClient())
            {
                string tokenid = "xxxxxxx-xxxxx-xxxxx-xxxxx";
                string objectid = "xxxxxxx-xxxxx-xxxxx-xxxxx";
                client.Encoding = System.Text.Encoding.UTF8;
                client.Headers.Set("tokenId", tokenid);
                string json = new JavaScriptSerializer().Serialize(new
                {
                    accountname = "מושון"
                });
                string result = client.UploadString("https://secure.powerlink.co.il/api/record/account/" + objectid, "PUT", json);
            }
