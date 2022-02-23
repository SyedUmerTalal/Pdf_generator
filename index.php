<html>
   <head>
      <link rel="apple-touch-icon" type="image/png" href="assets/img/favicon/favicon.png">
      <meta name="apple-mobile-web-app-title" content="CodePen">
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
      <link rel="mask-icon" type="image/x-icon" href="assets/img/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
      <title>Generate PDF</title>
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <script src="assets/js/4f7555ea4a.js" crossorigin="anonymous"></script>
      <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/select2.min.css" rel="stylesheet" />
    <style>
      /* error color */
      .error{
          color: #f13c4d;
       }
      /* Watermark icon */
      #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f773";
         }
      /* Header icon */
      #progressbar #account:before {
         font-family: FontAwesome;
         content: "\f5da";
      }
      /* Footer icon */
      #progressbar #personal:before {
         font-family: FontAwesome;
         content: "\f6bb";
      }
      
    </style>
   </head>
   <body>
      
      <div id="particles-js"></div>

      <!-- stats - count particles -->
      <div class="count-particles">
      <span class="js-count-particles"></span>
      </div>

         <div class="container">
            <div class="row">
               <div class="col l12 m12 s12">
                  <div class="container-fluid">
                     <div class="row justify-content-center">
                        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                           <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                              <marquee behavior="alternate">
                                 <h2 id="heading">PDF Generator</h2>
                              </marquee>
                              <form id="msform" action="watermark_image.php" method="POST" enctype="multipart/form-data" style="padding: 15px;">
                                 <!-- progressbar -->
                                 <ul id="progressbar">
                                    <li class="active" id="account"><strong>Header</strong></li>
                                    <li id="personal"><strong>Footer</strong></li>
                                    <li id="payment"><strong>Watermark</strong></li>
                                 </ul>
                                 <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                                 <br> <!-- fieldsets -->
                                 <fieldset>
                                    <div class="form-card">
                                       <div class="row">
                                          <div class="col-7">
                                             <h2 class="fs-title">Header Information:</h2>
                                          </div>
                                          <div class="col-5">
                                             <h2 class="steps">Step 1 - 3</h2>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-6">
                                             <label class="fieldlabels">Upload Your File:</label>
                                             <input type="file" id="upload_file" name="upload_file[]" multiple="" required>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels">Upload Logo:</label>
                                             <input type="file" name="upload_logo">
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels">Position :</label>
                                             <div class="form-group"> 
                                                   <select class="form-control select2 select2-hidden-accessible" name="position_header"  style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                                                   <option value="">Select Position</option>
                                                   <option value="left">Left</option>
                                                   <option value="center">Center</option>
                                                   <option value="right">Right</option>
                                                   </select> 
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels" name="font_header">Font Family:</label>
                                             <div class="form-group"> 
                                                   <select class="form-control select2 select2-hidden-accessible" name="font_header"  style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                                                   <option value="">Select font</option>
                                                   <option value="Arial">Arial</option>
                                                   <!-- <option value="Arial Black">Arial Black</option>
                                                   <option value="Arial narrow">Arial narrow</option>
                                                   <option value="Arial Rounded MT Bold">Arial Rounded MT Bold</option>
                                                   <option value="Helvetica">Helvetica</option>
                                                   <option value="Verdana">Verdana</option>
                                                   <option value="Calibri">Calibri</option>
                                                   <option value="Noto">Noto</option>
                                                   <option value="Lucida Sans">Lucida Sans</option>
                                                   <option value="Gill Sans">Gill Sans</option>
                                                   <option value="Century Gothic">Century Gothic</option>
                                                   <option value="Candara">Candara</option>
                                                   <option value="Futara">Futara</option>
                                                   <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                                                   <option value="Comic Sans MS">Comic Sans MS</option>
                                                   <option value="Brush Script MT">Brush Script MT</option>
                                                   <option value="Impact">Impact</option>
                                                   <option value="papyrus">papyrus</option>
                                                   <option value="Copperplate Gothic Light">Copperplate Gothic Light</option>
                                                   <option value="Gabriola">Gabriola</option>
                                                   <option value="Ink Free">Ink Free</option>
                                                   <option value="Lucida Handwriting">Lucida Handwriting</option>
                                                   <option value="Marlett">Marlett</option>
                                                   <option value="serif">serif</option>
                                                   <option value="sans-serif">sans-serif</option>
                                                   <option value="monospace">monospace</option>
                                                   <option value="cursive">cursive</option>
                                                   <option value="fantasy">fantasy</option>
                                                   <option value="system-ui">system-ui</option>
                                                   <option value="ui-serif">ui-serif</option>
                                                   <option value="ui-sans-serif">ui-sans-serif</option>
                                                   <option value="ui-monospace">ui-monospace</option>
                                                   <option value="ui-rounded">ui-rounded</option>
                                                   <option value="emoji">emoji</option>
                                                   <option value="math">math</option>
                                                   <option value="fangsong">fangsong</option> -->
                                             </select> 
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels">Text :</label>
                                             <input type="text" id="text_header" name="text_header" required>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels" name="url">URL :</label>
                                             <input type="url" id="url_header" name="url_header" required>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels" name="font_size_header">Font Size :</label>
                                             <input type="number" min="0" id="font_size_header" name="font_size_header" required><br><br>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels">Front Color :</label>
                                             <input type="color" id="favcolor" name="front_color_header" required >
                                          </div>
                                       </div>
                                    </div>
                                    <div class="error"></div>
                                    <input type="button" name="next" class="next action-button" value="Next" />
                                 </fieldset>
                                 <fieldset>
                                    <div class="form-card">
                                       <div class="row">
                                          <div class="col-7">
                                             <h2 class="fs-title">Footer Information:</h2>
                                          </div>
                                          <div class="col-5">
                                             <h2 class="steps">Step 2 - 3</h2>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-6">
                                             <label class="fieldlabels" name="position_footer">Position :</label>
                                             <div class="form-group"> 
                                                   <select class="form-control select2 select2-hidden-accessible" name="position_footer"  style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                                                   <option value="">Select Position</option>
                                                   <option value="left">Left</option>
                                                   <option value="center">Center</option>
                                                   <option value="right">Right</option>
                                             </select> 
                                             </div>
                                          </div>
                                          
                                          <div class="col-6">
                                             <label class="fieldlabels" name="font_footer">Font Family :</label>
                                             <div class="form-group"> 
                                                   <select class="form-control select2 select2-hidden-accessible" name="font_footer"  style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                                                   <option value="">Select font</option>
                                                   <option value="Arial">Arial</option>
                                                   <!-- <option value="Arial Black">Arial Black</option>
                                                   <option value="Arial narrow">Arial narrow</option>
                                                   <option value="Arial Rounded MT Bold">Arial Rounded MT Bold</option>
                                                   <option value="Helvetica">Helvetica</option>
                                                   <option value="Verdana">Verdana</option>
                                                   <option value="Calibri">Calibri</option>
                                                   <option value="Noto">Noto</option>
                                                   <option value="Lucida Sans">Lucida Sans</option>
                                                   <option value="Gill Sans">Gill Sans</option>
                                                   <option value="Century Gothic">Century Gothic</option>
                                                   <option value="Candara">Candara</option>
                                                   <option value="Futara">Futara</option>
                                                   <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                                                   <option value="Comic Sans MS">Comic Sans MS</option>
                                                   <option value="Brush Script MT">Brush Script MT</option>
                                                   <option value="Impact">Impact</option>
                                                   <option value="papyrus">papyrus</option>
                                                   <option value="Copperplate Gothic Light">Copperplate Gothic Light</option>
                                                   <option value="Gabriola">Gabriola</option>
                                                   <option value="Ink Free">Ink Free</option>
                                                   <option value="Lucida Handwriting">Lucida Handwriting</option>
                                                   <option value="Marlett">Marlett</option>
                                                   <option value="serif">serif</option>
                                                   <option value="sans-serif">sans-serif</option>
                                                   <option value="monospace">monospace</option>
                                                   <option value="cursive">cursive</option>
                                                   <option value="fantasy">fantasy</option>
                                                   <option value="system-ui">system-ui</option>
                                                   <option value="ui-serif">ui-serif</option>
                                                   <option value="ui-sans-serif">ui-sans-serif</option>
                                                   <option value="ui-monospace">ui-monospace</option>
                                                   <option value="ui-rounded">ui-rounded</option>
                                                   <option value="emoji">emoji</option>
                                                   <option value="math">math</option>
                                                   <option value="fangsong">fangsong</option> -->
                                             </select> 
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels" name="text_style">Text :</label>
                                             <input type="text" id="text_footer" name="text_footer" required>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels" name="url">URL :</label>
                                             <input type="url" id="url_footer" name="url_footer" required>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels" name="opacity_footer">Opacity :</label>
                                             <input type="rang" id="opacity_footer" name="opacity_footer" required>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels" name="font_size_footer">Font Size :</label>
                                             <input type="number" min="0" id="font_size_footer" name="font_size_footer" required>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels" name="front_color_footer">Front Color :</label>
                                             <input type="color" id="favcolor" name="front_color_footer" required>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels" name="outline_color_footer">Outline Color :</label>
                                             <input type="color" id="favcolor" name="outline_color_footer" required>
                                          </div>
                                       </div>    
                                    </div>
                                    <div class="error"></div>
                                    <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                 </fieldset>
                                 <fieldset>
                                    <div class="form-card">
                                       <div class="row">
                                          <div class="col-8">
                                             <h2 class="fs-title">Watermark Information:</h2>
                                          </div>
                                          <div class="col-4">
                                             <h2 class="steps">Step 3 - 3</h2>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-12">
                                             <label class="fieldlabels" name="wimage">Watermark Image :</label>
                                             <input type="file" name="wimage">
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels" name="pages">Pages :</label>
                                             <div class="form-group"> 
                                             <select class="form-control select2 select2-hidden-accessible" name="pages"  style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                                             <option value="All">All</option>
                                             <option value="first">First</option>
                                             <option value="last">Last</option>
                                             <option value="even">Even</option>
                                             <option value="odd">Odd</option>
                                             </select> 
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels" name="padding_top_botom">Padding (Top/Bottom) :</label>
                                             <input type="number" id="padding_top_botom" name="padding_top_botom" required>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels" name="padding_left_right">Padding (Left/Right) :</label>
                                             <input type="number" id="padding_left_right" name="padding_left_right" required>
                                          </div>
                                          <div class="col-6">
                                             <label class="fieldlabels" name="opacity_watermark">Opacity :</label>
                                             <input type="rang" id="opacity_watermark" name="opacity_watermark" required>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="error"></div>
                                    <input type="submit" name="submit" class="submit action-button" value="Download All" style="width: 125px;" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                 </fieldset>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <!-- <script src="assets/custom.js"></script> -->
      <script src="assets/js/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/custom.js"></script>
      <script src="assets/js/select2.min.js"></script>
      <script src="assets/js/particles.min.js" defer data-deferred="1"></script>
   </body>
</html>