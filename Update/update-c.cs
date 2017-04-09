using System.Collections.Specialized;
using System.Net;
using System.Web.Script.Serialization;
using System.IO;

using (WebClient client = new WebClient())
            {
                string tokenid = "0588209E-2715-419F-7777-732DABBDFE61"; //זה של dev אז להחליף לפני שמעלים
                string objectid = "332DB2BF-3694-4F80-7777-99F87B5AAB56";
                client.Encoding = System.Text.Encoding.UTF8;
                client.Headers.Set("tokenId", tokenid);
                string json = new JavaScriptSerializer().Serialize(new
                {
                    accountname = "מושון"
                });
                string result = client.UploadString("https://secure.powerlink.co.il/api/record/account/" + objectid, "PUT", json);
            }
