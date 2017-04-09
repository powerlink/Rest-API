using System.Collections.Specialized;
using System.Net;
using System.Web.Script.Serialization;
using System.IO;

using (WebClient client = new WebClient())
            {
                string tokenid = "0588209E-2715-419F-1234-732DA"; 
                client.Headers.Set("tokenId", tokenid);
                client.Encoding = System.Text.Encoding.UTF8;
                string json = new JavaScriptSerializer().Serialize(new
                {
                    accountname = "משה",
                    telephone1 = "036339060",
                    idnumber = "1234",
                    billingcity = "תל אביב"
                });
                string result = client.UploadString("https://secure.powerlink.co.il/api/record/account", "POST", json);
            }
