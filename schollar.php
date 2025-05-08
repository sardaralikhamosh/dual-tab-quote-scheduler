<!-- Custom Boxes Section with Read More Functionality - Add to Elementor HTML widget -->
<div class="custom-boxes-container">
  <div class="custom-boxes-header">
    <h2 class="custom-boxes-title">Custom Printed Boxes | First & Everlasting Brand Impression</h2>
    <p class="custom-boxes-subtitle">Create Secure and Stylish Custom Boxes to Slice up Competition</p>
    <p class="custom-boxes-tagline">Your first impression is your <strong>"Custom Printed Boxes"</strong>. Yes!</p>
    <p class="custom-boxes-question">But, How?</p>
    <button id="readMoreButton" class="custom-boxes-button">READ MORE</button>
  </div>
  
  <div class="custom-boxes-content" id="contentSection">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis eros a sapien hendrerit, ut commodo velit porttitor. Suspendisse potenti. Integer auctor accumsan nulla, ac rhoncus augue eleifend et. In tristique lorem ac felis eleifend, ut pretium lorem varius. Aliquam erat volutpat. Morbi volutpat nisi ac erat posuere, vitae efficitur felis condimentum. In malesuada urna sit amet tortor tempor, ut scelerisque libero feugiat.</p>
      
      <p>Pellentesque vitae purus vitae libero efficitur vehicula. Nulla id convallis libero, eget sodales elit. Sed a felis lacus. Proin fermentum, magna at dapibus egestas, metus libero vestibulum justo, sed tincidunt leo justo et nulla. Aliquam non est non nisi fermentum aliquam. Suspendisse potenti. Vestibulum vestibulum tempor lacinia. Curabitur tempor imperdiet nunc, nec tempor diam. Aliquam erat volutpat. Cras lacinia iaculis velit, non tempus nisl hendrerit sed. Morbi feugiat bibendum libero, eget eleifend tortor euismod nec. Integer quis purus facilisis, dignissim libero sed, vehicula lacus.</p>
      
      <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Integer in turpis ante. Nullam commodo vulputate nunc, sed dignissim elit. Donec varius malesuada purus, at varius libero tincidunt nec. Pellentesque congue nulla at felis facilisis, id fermentum risus ornare. Vivamus nec arcu vel libero posuere lacinia. Nulla facilisi. Aenean eu augue id magna lacinia porta non nec erat.</p>
      
      <p>Curabitur eleifend, nulla sed bibendum sodales, arcu magna maximus sapien, eget condimentum justo elit sed turpis. Cras nec vestibulum lacus. Sed sed fermentum ligula. Sed nec sapien non ligula suscipit feugiat non id tellus. Curabitur feugiat nisi risus, ac finibus ex convallis ac. Suspendisse blandit suscipit dui, nec porta felis tincidunt sit amet. Aenean at risus ac turpis scelerisque posuere. Nulla nec lectus sapien. Vivamus nec justo eget velit porta blandit. Vivamus hendrerit neque ac tincidunt porttitor. Integer feugiat, metus sed scelerisque egestas, libero magna gravida felis, a iaculis diam arcu sed diam.</p>
      
      <p>Proin consequat neque nec ex laoreet, at sollicitudin justo porta. Morbi sed elit nec augue ullamcorper tristique. Aliquam erat volutpat. Pellentesque quis luctus eros. Donec vitae nunc eget libero ullamcorper blandit. Nulla facilisi. Proin tincidunt purus metus, vel laoreet tellus sollicitudin in. Vestibulum luctus nunc eros, sed convallis arcu dapibus nec. Donec ut vulputate leo. Nullam in mauris nunc. Mauris in justo a justo malesuada sollicitudin. Etiam posuere vitae felis sed vestibulum.</p>
    </div>
  </div>


<style>
.custom-boxes-container {
  max-width: 100%;
  border: 1px solid #e0e0e0;
  margin: 20px auto;
  font-family: 'Open Sans', sans-serif;
  position: relative;
  background: #fff;
  min-height: 400px;
  height: 400px;
  overflow-y: auto;
}

.custom-boxes-header {
  text-align: center;
  padding: 30px 20px;
}

.custom-boxes-title {
  color: #B22222 !important;
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 15px;
}

.custom-boxes-subtitle {
  font-size: 18px;
  margin-bottom: 10px;
}

.custom-boxes-tagline {
  font-size: 16px;
  margin-bottom: 15px;
}

.custom-boxes-question {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 20px;
}

.custom-boxes-button {
  background-color: #fff !important;
  border: 1px solid #000;
  color: #000;
  padding: 10px 25px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease;
  margin-bottom: 30px;
}

.custom-boxes-button:hover {
  background-color: #f5f5f5;
}

.custom-boxes-content {
  padding: 0 20px 20px 20px;
}

.custom-boxes-content p {
  margin-bottom: 20px;
  line-height: 1.6;
  font-size: 16px;
  color: #333;
}

/* Scrollbar styling */
.custom-boxes-container::-webkit-scrollbar {
  width: 8px;
}

.custom-boxes-container::-webkit-scrollbar-track {
  background: #f1f1f1;
}

.custom-boxes-container::-webkit-scrollbar-thumb {
  background: #B22222;
  border-radius: 4px;
}

.custom-boxes-container::-webkit-scrollbar-thumb:hover {
  background: #9B1B1B;
}

/* Mobile Responsive Styles */
@media only screen and (max-width: 767px) {
  .custom-boxes-title {
    font-size: 22px;
  }
  
  .custom-boxes-subtitle,
  .custom-boxes-tagline,
  .custom-boxes-question,
  .custom-boxes-button,
  .custom-boxes-content p {
    font-size: 16px;
    font-weight: 500;
    line-height: 20px;
    font-family: 'Open Sans', sans-serif;
  }
  
  .custom-boxes-container {
    min-height: 500px;
    height: 500px;
  }
}
</style>

<script>
jQuery(document).ready(function($) {
  $('#readMoreButton').on('click', function() {
    // Scroll to the content section within the container
    $('.custom-boxes-container').animate({
      scrollTop: $('#contentSection').position().top
    }, 800);
  });
});
</script>