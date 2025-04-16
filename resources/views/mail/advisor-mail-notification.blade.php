<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title>Visitor Information</title>
  <style>
    table, td, div, h1, p {
      font-family: Arial, sans-serif;
    }
    @media screen and (max-width: 530px) {
      .unsub {
        display: block;
        padding: 8px;
        margin-top: 14px;
        border-radius: 6px;
        background-color: #555555;
        text-decoration: none !important;
        font-weight: bold;
      }
      .col-lge {
        max-width: 100% !important;
      }
    }
    @media screen and (min-width: 531px) {
      .col-sml {
        max-width: 27% !important;
      }
      .col-lge {
        max-width: 73% !important;
      }
    }
  </style>
</head>
<body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
  <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
    <table role="presentation" style="width:100%;border:none;border-spacing:0;">
      <tr>
        <td align="center" style="padding:0;">
          <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
            <tr>
              <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                <a href="{{route('login')}}" style="text-decoration:none;"><img src="https://hellobarc.com/wp-content/themes/emeritus/assets/img/logo.png" width="165" alt="Logo" style="width:165px;max-width:80%;height:auto;border:none;text-decoration:none;color:#ffffff;"></a>
              </td>
            </tr>
            <tr>
                <td style="padding:30px;background-color:#004AAD; color:#f8f8f8">
                    <h3>Visitor Information</h3>
                </td>
            </tr>
            <tr>
              <td style="padding:30px;background-color:#ffffff;">
                <h5 style="margin-top:0;margin-bottom:16px;font-size:30px;line-height:32px;font-weight:800;letter-spacing:-0.02em; color: #ff3884;">Visitor Name: {{$email_visitor_info['full_name']}}</h5>
                <p style="margin:0; font-weight: 800;">Email:  {{$email_visitor_info['email']}}</p>
                <p>Mobile  : {{$email_visitor_info['mobile']}}</p>
                <p>Purpose of Visit  : {{$email_visitor_info['purpose_of_visit']}}</p>
              </td>
            </tr>
            <tr>
              <td style="padding:30px;text-align:center;font-size:12px;background-color:#404040;color:#cccccc;">
                <p style="margin:0 0 8px 0;"><a href="https://www.facebook.com/IELTSdotlive/?ref=page_internal" style="text-decoration:none;">
                  <img src="https://assets.codepen.io/210284/facebook_1.png" width="40" height="40" alt="f" style="display:inline-block;color:#cccccc;"></a></p>
                <p style="margin:0;font-size:14px;line-height:20px;">&reg; Hello BARC<br>
                <a class="unsub" href="https://www.facebook.com/IELTSdotlive" style="color:#cccccc;text-decoration:underline;">Subscribe</a></p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>