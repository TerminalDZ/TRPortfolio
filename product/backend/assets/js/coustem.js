// select style
$(document).ready(function () {
  $('#select_text').selectize({
      sortField: 'text'
  });
});



//input tags

var search_field_selectize;
$(function() {
	var $search_field = $('#searchfield').selectize({
    plugins: ['remove_button'],
    delimiter: ',',
    persist: false,
    create: function(input) {
        return {
            value: input,
            text: input
        }
    },
    onChange: function(value) {
      console.log(value);    
    }
  });
  // fetch the instance
  search_field_selectize = $search_field[0].selectize;
  
  
});

//validate Social networking sites

function validateForm() {
    var x = document.getElementById("social_link").value;
    if (x == "") {
      $("#alert-Social").text("Input must be filled out").fadeIn(500);
      setTimeout(function() {
        $("#alert-Social").fadeOut(500);
      }, 5000);
      return false;
    }
    if (!x.startsWith("http://") && !x.startsWith("https://")) {
      $("#alert-Social").text("Input must be a valid URL starting with 'http://' or 'https://'").fadeIn(500);
      setTimeout(function() {
        $("#alert-Social").fadeOut(500);
      }, 5000);
      return false;
    }
    return true;
  };



//select & delet Communication messages

function toggleDeleteButton() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var checkedCount = 0;
  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      checkedCount++;
    }
  }
  var deleteButton = document.getElementById("delete-button");
  if (checkedCount > 0) {
    deleteButton.style.display = "block";
  } else {
    deleteButton.style.display = "none";
  }
};

function toggleAllCheckboxes(button) {
var checkboxes = document.querySelectorAll('input[type="checkbox"]');
for (var i = 0; i < checkboxes.length; i++) {
  checkboxes[i].checked = button.innerText === 'Select All';
}
toggleDeleteButton();
button.innerText = button.innerText === 'Select All' ? 'Deselect All' : 'Select All';
};