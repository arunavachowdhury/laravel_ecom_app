
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Rx Template</title>
  <style>
  table td p{padding:4px 0; margin:0;}

  .btn-print {
      font-size: 18px;
      font-weight: bold;
      border-radius: 0px;
      padding: 7px 20px;
      margin: 0px 3px 3px 3px;
      -webkit-box-shadow: 1px 1px 2px 1px rgba(0,0,0,0.75);
      -moz-box-shadow: 1px 1px 2px 1px rgba(0,0,0,0.75);
      box-shadow: 1px 1px 2px 1px rgba(0,0,0,0.75);
      text-decoration: none;
      cursor: pointer;
      width: 101px;
      height: 40px;
  }
  .btn-print {
      background: blue;
  }
  .top-margin {
    margin-top: 250px;
  }
  @media  print 
  {
      @page  {
        size: A4; /* DIN A4 standard, Europe */
      }
  }
  </style>

  <style>
  .btn-print {
      font-size: 18px;
      font-weight: bold;
      border-radius: 0px;
      padding: 10px 20px;
      margin: 0px 3px 3px 3px;
      -webkit-box-shadow: 1px 1px 2px 1px rgba(0,0,0,0.75);
      -moz-box-shadow: 1px 1px 2px 1px rgba(0,0,0,0.75);
      box-shadow: 1px 1px 2px 1px rgba(0,0,0,0.75);
      text-decoration: none;
      cursor: pointer;
  }
  .btn-print {
      background: blue;
  }
  </style>
</head>
<body>
<div class="" style="padding-left:0px; padding-right:0; padding-top:0px; padding-bottom:0">
  <table style="padding:0; margin:0; width:100%" cellspacing="0" cellpadding="0">
      
    <tbody>
      <tr>
        <td>
          <img src="{{url('themes/back/image/'.$image)}}">
        </td>
      </tr>
    </tbody>

  </table>
  <table style="padding:0; margin:0; width:100%" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td colspan="2" style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">   
          <table style="padding:0; width:100%" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">&nbsp;</td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; width:20px;">&nbsp;</td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">&nbsp;</td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">&nbsp;</td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; width:200px;">&nbsp;</td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">&nbsp;</td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;  width:20px;">&nbsp;</td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">&nbsp;</td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;"><p>DATE</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; width:20px;"><p>:</p></td>    
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; border-bottom:1px dashed #000;"><p>02/24/2021 10:00</p></td>
              </tr>
              <tr>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;"><p>NAME</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>:</p></td>
                <td colspan="3" style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;"><p> ARUNAVA CHOWDHURY</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;"><p>AGE</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>:</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>25Y 2M 4D </p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;"><p>GENDER</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>:</p></td>    
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>M</p></td>
              </tr>
              <tr>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;"><p>WEIGHT</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>:</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>70</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">&nbsp;</td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;"><p>HEIGHT</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>:</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>5 ft 4 inches</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;"><p>BMI</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>:</p></td>    
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>26.7</p></td>
              </tr>
              <tr>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;"><p>PATIENT ID</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>:</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;" colspan="2"><p>700066</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">&nbsp;</td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;font-weight:bold;"><p>DOC CODE</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>:</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>20000018</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;"><p>PRESCRIPTION NO.</p></td>
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p>:</p></td>   
                <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"><p></p><p>1000000129</p></td>
              </tr>
              <tr>
              <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; border-bottom:1px dashed #000; font-weight:bold;"><p>FOLLOW UP DATE</p></td>
              <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; border-bottom:1px dashed #000;"><p>:</p></td>   
              <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; border-bottom:1px dashed #000;"><p></p><p></p></td>
              <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; border-bottom:1px dashed #000;"><p>&nbsp;</p></td>  
              <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; border-bottom:1px dashed #000;"><p>&nbsp;</p></td>  
              <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; border-bottom:1px dashed #000;"><p>&nbsp;</p></td>  
              <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; border-bottom:1px dashed #000;"><p>&nbsp;</p></td>  
              <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; border-bottom:1px dashed #000;"><p>&nbsp;</p></td>  
              <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; border-bottom:1px dashed #000;"><p>&nbsp;</p></td>  
              <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; border-bottom:1px dashed #000;"><p>&nbsp;</p></td>  
              <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; border-bottom:1px dashed #000;"><p>&nbsp;</p></td>  
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">   
          <table style="padding:0; margin:0; width:100%" cellspacing="0" cellpadding="0">
            <tbody>
            <tr>
              <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">
                <table style="padding:0; margin:0 auto; width:100%" cellspacing="0" cellpadding="0">
                <tbody> 
                                <tr>
                    <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;width: 25%; vertical-align: top;"><p style="padding:0; margin:0;">HISTORY<span style="float: right;padding: 3px 15px;">:</span></p></td>                
                    <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">
                    
                                      <span> , </span>
                                                              <span>Drinking : Sometimes</span>
                                                          </td>
                  </tr>
                                   
                                  <tr>
                    <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;width: 25%; vertical-align: top;"><p style="padding:0; margin:0;">ALLERGIES<span style="float: right;padding: 3px 15px;">:</span></p></td>                
                    <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">                    
                                          <span>test </span>
                                          
                    </td>
                  </tr>  
                                             
                  <tr>
                    <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;width: 25%; vertical-align: top;"><p style="padding:0; margin:0;">CHIEF COMPLAINTS<span style="float: right;padding: 3px 15px;">:</span></p></td>               
                    <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">                       
                                              <span style="">PANCREATITIS : </span>
                                          
                    </td>
                  </tr> 
                                                  <tr>
                    <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;width: 25%; vertical-align: top;"><p style="padding:0; margin:0;">CLINICAL DIAGNOSIS<span style="float: right;padding: 3px 15px;">:</span></p></td>                
                    <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">                  
                                          <span style="">PANCREATIC - NECROSECTOMY : </span>
                       
                    </td>
                  </tr>
                   
                         
                  <tr>
                    <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold;width: 25%; vertical-align: top;"><p style="padding:0; margin:0;">INV. REPORTS<span style="float: right;padding: 3px 15px;">:</span></p></td>              
                    <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">
                                              <span style=" font-weight: bold;">
                        CT SCAN - ABDOMEN :  (10/02/2021), </span>
                                              <span style=" font-weight: bold;">
                        USG - W/A :  (10/02/2021)</span>
                         
                    </td>
                  </tr>
                        
                </tbody>
                </table>
              </td>
              
            </tr>
            </tbody>
          </table>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">
          <table style="padding:0; margin:0 auto; width:100%" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">
                <table style="padding:0; margin:0 auto; width:100%" cellspacing="0" cellpadding="0">
                  <tbody>
                                    </tbody>
                </table>
              </td>
            </tr>
          </tbody>
          </table>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">   
          <table style="padding:0; margin:0; width:100%" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td colspan="2" style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;">
                  <table style="padding:0; margin:0 auto; width:100%" cellspacing="0" cellpadding="0">
                    <tbody>
                                                              <tr>
                        <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000; font-weight:bold; vertical-align: top; width: 25%;"><p style="padding:0; margin:0;">INV. ADV.<span style="float: right;padding: 3px 15px;">:</span></p></td>
                        <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#000;"> 
                                                      <span style="">MRCP : </span>
                              
                        </td>
                      </tr>     
                                                            </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>

  <table style="padding:0; margin:0 auto; width:100%;margin-top: 50px;" cellspacing="0" cellpadding="0" border="0">
    <tbody>
      <tr>
        <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#FFF; width: 400px;">&nbsp;</td>
        <td style="font-family:'Times New Roman', Times, serif; font-size:14px; color:#FFF;width:530px;"><a class="ele-btn btn-print" target="_blank" href="http://localhost:8000/patientRx/printprescription?appointment_id=1000000129&amp;id=6&amp;status=p&amp;rx_format=2" style="color: #fff;"><i class="fa fa-print"></i> Print</a></td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>




