let carousel_s_form = document.getElementById("carousel_s_form");
let carousel_pic_inp = document.getElementById("carousel_pic_inp");

carousel_s_form.addEventListener("submit", function (e) {
  e.preventDefault();
  add_carousel();
});

function add_carousel() {
  let data = new FormData();
  data.append("picture", carousel_pic_inp.files[0]);
  data.append("add_carousel", "");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/carousel_crud.php", true);

  xhr.onload = function () {
    if (this.responseText.trim() === "invalid-image-type") {
      showAlert("error", "ONLY JPG, JPED, PNG, WEBP formats are allowed!");
    } else if (this.responseText.trim() === "image-size-is-too-large") {
      showAlert("error", "IMAGE SHOULD BE LESS THAN 5MB");
    } else if (this.responseText.trim() === "image-upload-failed") {
      showAlert("error", "Image upload failed. Server down.");
    } else {
      showAlert("success", "Carousel Item Added Successfully");
      carousel_pic_inp.value = "";
      get_carousel();
    }
  };

  xhr.send(data);
}

function get_carousel() {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/carousel_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    document.getElementById("carousel-data").innerHTML = this.responseText;
  };

  xhr.send("get_carousel"); // Fix the function name here
}

function delete_carousel(val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/carousel_crud.php", true);
  xhr.setRequestHeader("content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (this.responseText.trim() === "1") {
      showAlert("success", "Carousel Item Deleted Successfully!");
      get_carousel();
    } else {
      showAlert("error", "Unable to remove carousel item. SERVER DOWN!");
    }
  };

  xhr.send("delete_carousel=" + val); // Fix the parameter name here
}

window.onload = function () {
  get_carousel();
};
