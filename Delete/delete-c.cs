using System.Collections.Specialized;
using System.Net;
using System.Web.Script.Serialization;
using System.IO;

 using (WebClient client = new WebClient())
            {
                string tokenid = "0588209E-2715-419F-7777-732DABBDFE61"; //זה של dev אז להחליף לפני שמעלים
                string objectid = "332db2bf-3694-4f80-7777-99f87b5aab56";
                client.Encoding = System.Text.Encoding.UTF8;
                client.Headers.Set("tokenId", tokenid);
                string result = client.UploadString("https://secure.powerlink.co.il/api/record/account/" + objectid, "DELETE", "");
            }
