using System.Collections.Specialized;
using System.Net;
using System.Web.Script.Serialization;
using System.IO;

using (WebClient client = new WebClient())
            {
                string tokenid = "0588209E-2715-419F-7123-732D1234"; 
                client.Headers.Set("tokenId", tokenid);
                client.Headers.Set("ContentType", "application/json");
                client.Headers.Set("utc_time", "1");
                client.Encoding = System.Text.Encoding.UTF8;
                string json = new JavaScriptSerializer().Serialize(new
                {
                    page_number = 1,
                    objecttype = 1,
                    page_size = 100,
                    query = "(statuscode = 1)",    //optional field
                    fields = "accountid",    //optional field
                    sort_by = "createdon",    //optional field
                    sort_type = "desc" //optional field
                });
                string result = client.UploadString("https://secure.powerlink.co.il/api/query", "POST", json);
            }
