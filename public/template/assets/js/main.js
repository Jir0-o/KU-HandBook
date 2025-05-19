/**
 * Main
 */

'use strict';

let menu, animate;

(function () {
  // Initialize menu
  //-----------------

  let layoutMenuEl = document.querySelectorAll('#layout-menu');
  layoutMenuEl.forEach(function (element) {
    menu = new Menu(element, {
      orientation: 'vertical',
      closeChildren: false
    });
    // Change parameter to true if you want scroll animation
    window.Helpers.scrollToActive((animate = false));
    window.Helpers.mainMenu = menu;
  });

  // Initialize menu togglers and bind click on each
  let menuToggler = document.querySelectorAll('.layout-menu-toggle');
  menuToggler.forEach(item => {
    item.addEventListener('click', event => {
      event.preventDefault();
      window.Helpers.toggleCollapsed();
    });
  });

  // Display menu toggle (layout-menu-toggle) on hover with delay
  let delay = function (elem, callback) {
    let timeout = null;
    elem.onmouseenter = function () {
      // Set timeout to be a timer which will invoke callback after 300ms (not for small screen)
      if (!Helpers.isSmallScreen()) {
        timeout = setTimeout(callback, 300);
      } else {
        timeout = setTimeout(callback, 0);
      }
    };

    elem.onmouseleave = function () {
      // Clear any timers set to timeout
      document.querySelector('.layout-menu-toggle').classList.remove('d-block');
      clearTimeout(timeout);
    };
  };
  if (document.getElementById('layout-menu')) {
    delay(document.getElementById('layout-menu'), function () {
      // not for small screen
      if (!Helpers.isSmallScreen()) {
        document.querySelector('.layout-menu-toggle').classList.add('d-block');
      }
    });
  }

  // Display in main menu when menu scrolls
  let menuInnerContainer = document.getElementsByClassName('menu-inner'),
    menuInnerShadow = document.getElementsByClassName('menu-inner-shadow')[0];
  if (menuInnerContainer.length > 0 && menuInnerShadow) {
    menuInnerContainer[0].addEventListener('ps-scroll-y', function () {
      if (this.querySelector('.ps__thumb-y').offsetTop) {
        menuInnerShadow.style.display = 'block';
      } else {
        menuInnerShadow.style.display = 'none';
      }
    });
  }

  // Init helpers & misc
  // --------------------

  // Init BS Tooltip
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  // Accordion active class
  const accordionActiveFunction = function (e) {
    if (e.type == 'show.bs.collapse' || e.type == 'show.bs.collapse') {
      e.target.closest('.accordion-item').classList.add('active');
    } else {
      e.target.closest('.accordion-item').classList.remove('active');
    }
  };

  const accordionTriggerList = [].slice.call(document.querySelectorAll('.accordion'));
  const accordionList = accordionTriggerList.map(function (accordionTriggerEl) {
    accordionTriggerEl.addEventListener('show.bs.collapse', accordionActiveFunction);
    accordionTriggerEl.addEventListener('hide.bs.collapse', accordionActiveFunction);
  });

  // Auto update layout based on screen size
  window.Helpers.setAutoUpdate(true);

  // Toggle Password Visibility
  window.Helpers.initPasswordToggle();

  // Speech To Text
  window.Helpers.initSpeechToText();

  // Manage menu expanded/collapsed with templateCustomizer & local storage
  //------------------------------------------------------------------

  // If current layout is horizontal OR current window screen is small (overlay menu) than return from here
  if (window.Helpers.isSmallScreen()) {
    return;
  }

  // If current layout is vertical and current window screen is > small

  // Auto update menu collapsed/expanded based on the themeConfig
  window.Helpers.setCollapsed(true, false);
})();


// script for add more text field for mission page
function add_more() {

  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);

  let add_element = `<div class="mb-3"><label for="" class="form-label">MISSION CODE: </label><input type="text" class="form-control" placeholder="Code of mission" /></div><div class="mb-3"><label for="" class="form-label">MISSION OF THE DISCIPLINE/POE: </label><textarea name="${randomNumber}" id="dynamic_details_${randomNumber}"  cols="30" rows="3"></textarea></div>`;

  let textbox_script = `<script> CKEDITOR.replace('${randomNumber}'); </script>`;

  let append_box = $("#append_box");

  // $(append_box).append("<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>"+add_element+"</li>");
  $(append_box).append(`<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`);

}

// script for add more text field for mission page
function add_more_objective() {

  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);

  let add_element = `<div class="mb-3"><label for="" class="form-label">Objective Code: </label><input type="text" class="form-control" placeholder="Code of Objective" /></div><div class="mb-3"><label for="" class="form-label">OBJECTIVE OF THE DISCIPLINE/POE:</label><textarea name="${randomNumber}" id="dynamic_details_${randomNumber}"  cols="30" rows="3"></textarea></div>`;

  let textbox_script = `<script> CKEDITOR.replace('${randomNumber}'); </script>`;

  let append_box = $("#append_box_objective");

  // $(append_box).append("<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>"+add_element+"</li>");
  $(append_box).append(`<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`);

}

function remove_box(event) {

  $(event.target).parent().parent().remove();

}


/// Modify the add_more_2() function to pass randomNumber to loadDomains()
function add_more_2() {
  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);
  let add_element = `
      <div class="mb-3">
          <label class="form-label">Graduate Attribute Code:</label>
          <input type="text" class="form-control" placeholder="Code of Graduate Attribute" />
      </div>
      <div class="mb-3">
          <label class="form-label">Domains:</label>
          <div class="checkbox-group" id="domain_${randomNumber}"></div>
      </div>
      <div class="mb-3">
        <label class="form-label">GRADUATE ATTRIBUTES DETAILS:</label>
        <textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" class="form-control" rows="3"></textarea>
    </div>
  `;

  let textbox_script = `<script> CKEDITOR.replace('${randomNumber}'); </script>`;
  let append_box = $("#append_box_graduate_attributes");

  $(append_box).append(`<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`);

  // Pass randomNumber to loadDomains()
  loadDomains(`#domain_${randomNumber}`, randomNumber);
}

// Modify the loadDomains() function to accept randomNumber as a parameter
function loadDomains(selector, randomNumber) {
  console.log('Loading domains for:', selector);
  $.ajax({
      url: domainUrl,
      type: 'GET',
      success: function(response) {
          console.log('Domain response:', response);
          // Clear existing checkboxes
          $(selector).empty();
          // Append new checkboxes
          response.data.forEach(element => {
              let checkbox = `<div class="form-check form-check">
                                  <input class="form-check-input" type="checkbox" id="domain_ids" value="${element.id}" id="domain_${element.id}_${randomNumber}">
                                  <label class="form-check-label" for="domain_${element.id}_${randomNumber}">${element.name}</label>
                              </div>`;
              $(selector).append(checkbox);
          });
      },
      error: function(xhr, status, error) {
          console.error('Ajax request error:', error);
      }
  });
}
// add more button function for poe
function add_more_3() {

  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);

  let add_element = `<div class="mb-3"><label for="" class="form-label">POE Code: </label><input type="text" class="form-control" placeholder="Code of POE" /></div><div class="mb-3">
  <label class="form-label">Domains:</label>
  <div class="checkbox-group" id="domain_${randomNumber}"></div>
</div><div class="mb-3"><label for="" class="form-label">POE Details: </label><textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3"></textarea></div>`;

  let textbox_script = `<script> CKEDITOR.replace('${randomNumber}'); </script>`;

  let append_box = $("#append_box_PEO");

  // $(append_box).append("<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>"+add_element+"</li>");
  $(append_box).append(`<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`);
// Pass randomNumber to loadDomains()
loadDomains(`#domain_${randomNumber}`, randomNumber);
}

function add_more_fundamental() {

  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);

  let add_element = `<div class="mb-3"><label for="" class="form-label">PLO Code(Fundamental): </label><input type="text" class="form-control" placeholder="Code of Fundamental" /></div>
</div><div class="mb-3"><label for="" class="form-label">PLO Details(Fundamental): </label><textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3"></textarea></div>`;
  let textbox_script = `<script> CKEDITOR.replace('${randomNumber}'); </script>`;

  let append_box = $("#append_box_fundamental");

  $(append_box).append(`<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`);
}

function add_more_social() {

  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);

  let add_element = `<div class="mb-3"><label for="" class="form-label">PLO Code(Social): </label><input type="text" class="form-control" placeholder="Code of Social" /></div> </div><div class="mb-3"><label for="" class="form-label">PLO Details(Social): </label><textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3"></textarea></div>`;
  let textbox_script = `<script> CKEDITOR.replace('${randomNumber}'); </script>`;
  let append_box = $("#append_box_social");
  
  $(append_box).append(`<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`);
}

function add_more_thinking() {

  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);

  let add_element = `<div class="mb-3"><label for="" class="form-label">PLO Code(Thinking): </label><input type="text" class="form-control" placeholder="Code of Thinking" /></div> </div><div class="mb-3"><label for="" class="form-label">PLO Details(Thinking): </label><textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3"></textarea></div>`;
  let textbox_script = `<script> CKEDITOR.replace('${randomNumber}'); </script>`;
  let append_box = $("#append_box_thinking");

  $(append_box).append(`<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`);
}

function add_more_personal() {

  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);

  let add_element = `<div class="mb-3"><label for="" class="form-label">PLO Code(Personal): </label><input type="text" class="form-control" placeholder="Code of Personal" /></div> </div><div class="mb-3"><label for="" class="form-label">PLO Details(Personal): </label><textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3"></textarea></div>`;
  let textbox_script = `<script> CKEDITOR.replace('${randomNumber}'); </script>`;
  let append_box = $("#append_box_personal");

  $(append_box).append(`<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`);
}


// add more button function for poe
function add_more_clo() {

  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);

  let add_element = `<div class="mb-3"><label for="" class="form-label">CLO Code: </label><input type="text" class="form-control" placeholder="Code of CLO" /></div><div class="mb-3"><label for="" class="form-label">CLO Details: </label><textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3"></textarea></div>`;

  let textbox_script = `<script> CKEDITOR.replace('${randomNumber}'); </script>`;

  let append_box = $("#append_box_CLO");

  // $(append_box).append("<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>"+add_element+"</li>");
  $(append_box).append(`<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`);
}

function more_learn_material() {
  // Generate a random number for unique ID
  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);

  // Create HTML elements for course selection dropdown
  let courseDropdown = `
        <div class="mb-3">
        <label for="" class="form-label">Learning Material Type: </label>
        <select class="form-control" name="" id="material_type_${randomNumber}">
        </select>
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Material Description: </label>
          <textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3"></textarea>
      </div>
  `;

  // Fetch course information via AJAX
  $.ajax({
    url: materialTypeUrl,
      type: 'GET',
      success: function(response) {
          // Loop through the response data and append options to the select element

          //display selected one
          $(`#material_type_${randomNumber}`).append('<option value="">Select One</option>');
          response.data.forEach(element => {
              $(`#material_type_${randomNumber}`).append('<option value="' + element.id + '">' + element
                  .name + '</option>');
          });
      },
      error: function(xhr, status, error) {
          console.error('Ajax request error:', error);
      }
  });

  // Generate script tag to initialize CKEditor for the generated textarea
  let textbox_script = `<script> CKEDITOR.replace('dynamic_details_${randomNumber}'); </script>`;

  let append_box = $("#append_box_learning_material");

  // Append the learning material description textarea and CKEditor script to the container
  $(append_box).append(`<li>
      <div class='d-flex justify-content-between'>
          <h5>New Item</h5>
          <button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button>
      </div>
      ${courseDropdown}${textbox_script}
  </li>`);
}

function more_learn_material() {
  // Generate a random number for unique ID
  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);

  // Create HTML elements for course selection dropdown
  let courseDropdown = `
        <div class="mb-3">
        <label for="" class="form-label">Learning Material Type: </label>
        <select class="form-control" name="" id="material_type_${randomNumber}">
        </select>
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Material Description: </label>
          <textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3"></textarea>
      </div>
  `;

  // Fetch course information via AJAX
  $.ajax({
    url: materialTypeUrl,
      type: 'GET',
      success: function(response) {
          // Loop through the response data and append options to the select element

          //display selected one
          $(`#material_type_${randomNumber}`).append('<option value="">Select One</option>');
          response.data.forEach(element => {
              $(`#material_type_${randomNumber}`).append('<option value="' + element.id + '">' + element
                  .name + '</option>');
          });
      },
      error: function(xhr, status, error) {
          console.error('Ajax request error:', error);
      }
  });

  // Generate script tag to initialize CKEditor for the generated textarea
  let textbox_script = `<script> CKEDITOR.replace('dynamic_details_${randomNumber}'); </script>`;

  let append_box = $("#append_box_learning_material");

  // Append the learning material description textarea and CKEditor script to the container
  $(append_box).append(`<li>
      <div class='d-flex justify-content-between'>
          <h5>New Item</h5>
          <button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button>
      </div>
      ${courseDropdown}${textbox_script}
  </li>`);
}

function add_more_cordinator() {
  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);

  let add_element = `<div class="mb-3"><label for="" class="form-label">Name of Course Coordinator: </label><input type="text" class="form-control" placeholder="Name of cordinator" /></div><div class="mb-3"><label for="" class="form-label">Short profile of Course Coordinator: </label><textarea name="${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3"></textarea></div>`;

  let textbox_script = `<script> CKEDITOR.replace('${randomNumber}'); </script>`;

  let append_box = $("#append_box_Course_Coordinator");

  // $(append_box).append("<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>"+add_element+"</li>");
  $(append_box).append(`<li><div class='d-flex justify-content-between'><h5>New Item</h5><button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button></div>${add_element}${textbox_script}</li>`);
}

function more_map_clo() {
  // Generate a random number for unique ID
  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 5);

  // Create HTML elements for course selection dropdown
  let courseDropdown = `
      <div class="mb-3">
          <label for="" class="form-label">Mapping CLO(s): </label>
          <select multiple class="form-control clos-select" id="clo_${randomNumber}" data-placeholder="Choose anything"></select>
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Course Content Description: </label>
          <textarea name="dynamic_details_${randomNumber}" id="dynamic_details_${randomNumber}" cols="30" rows="3"></textarea>
      </div>
  `;

  // Fetch CLO data from the API and populate the Select2 dropdown
  // Fetch CLO data from the API and populate the Select2 dropdown
  var courseId = localStorage.getItem('submitCourseId');

  const cloIndexUrl = baseCloIndexUrl.replace(':id', courseId);

  $.ajax({
      url: cloIndexUrl,
      type: 'GET',
      success: function(response) {
          // Loop through the response data and append options to the select element
          $(`#clo_${randomNumber}`).append('<option value="">Select CLO</option>');
          response.data.forEach(element => {
              $(`#clo_${randomNumber}`).append('<option value="' + element.id + '">' + element.code + '</option>');
          });
          $(`#clo_${randomNumber}`).select2();
      },
      error: function(xhr, status, error) {
          console.error('Ajax request error:', error);
      }
  });

  // Generate script tag to initialize CKEditor for the generated textarea
  let textbox_script = `<script> CKEDITOR.replace('dynamic_details_${randomNumber}'); </script>`;

  let append_box = $("#append_box_course_content");

  // Append the learning material description textarea and CKEditor script to the container
  $(append_box).append(`<li>
      <div class='d-flex justify-content-between'>
          <h5>New Item</h5>
          <button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button>
      </div>
      ${courseDropdown}${textbox_script}
  </li>`);
}

function more_map_clo_edit() {
  // Generate a random number for unique ID
  let randomNumber = String(Math.floor(Math.random() * (98765 - 12345 + 1)) + 12345);

  // Create HTML elements for course selection dropdown
  let courseDropdown = `
      <div class="mb-3">
          <label for="" class="form-label">Mapping CLO(s): </label>
          <select multiple class="form-control clos-select" id="clo_${randomNumber}" data-placeholder="Choose anything"></select>
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Course Content Description: </label>
          <textarea name="dynamic_details_${randomNumber}" id="dynamic_details_${randomNumber}" class="ckeditor" cols="30" rows="3"></textarea>
      </div>
  `;

  let append_box = $("#append_box_course_content");

  // Append the learning material description textarea to the container
  $(append_box).append(`<li>
      <div class='d-flex justify-content-between'>
          <h5>New Item</h5>
          <button class='btn btn-sm btn-danger' onclick='remove_box(event)'>Remove</button>
      </div>
      ${courseDropdown}
  </li>`);

  // Initialize CKEditor for the new textarea
  CKEDITOR.replace(`dynamic_details_${randomNumber}`);

  var courseId = localStorage.getItem('courseId');

  const cloIndexUrl = baseCloIndexUrl.replace(':id', courseId);

  $.ajax({
      url: cloIndexUrl,
      type: 'GET',
      success: function(response) {
          let selectElement = $(`#clo_${randomNumber}`);
          selectElement.empty(); // Ensure the select is empty before adding new options
          response.data.forEach(element => {
              selectElement.append('<option value="' + element.id + '">' + element.code + '</option>');
          });

          // Initialize Select2
          selectElement.select2({
              width: '100%',
          });
      },
      error: function(xhr, status, error) {
          console.error('Ajax request error:', error);
      }
  });
}