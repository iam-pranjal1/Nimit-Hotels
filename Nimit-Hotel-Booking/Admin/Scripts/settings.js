let general_data, contact;
let general_s_form = document.getElementById("general_s_form");

let site_tittle_edit = document.getElementById("site_tittle_edit");
let site_about_edit = document.getElementById("site_about_edit");

let contact_s_form = document.getElementById("contact_s_form");

let team_s_form = document.getElementById("team_s_form");

let member_name_inp = document.getElementById("member_name_inp");
let member_pic_inp = document.getElementById("member_pic_inp");

function get_general() {
  let site_tittle = document.getElementById("site_tittle");
  let site_about = document.getElementById("site_about");

  let shutdown_toggle = document.getElementById("shutdown-toggle");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    general_data = JSON.parse(this.responseText);

    site_tittle.innerText = general_data.site_tittle;
    site_about.innerText = general_data.site_about;

    site_tittle_edit.value = general_data.site_tittle;
    site_about_edit.value = general_data.site_about;

    if (general_data.shutdown == 0) {
      shutdown_toggle.checked = false;
      shutdown_toggle.value = 0;
    } else {
      shutdown_toggle.checked = true;
      shutdown_toggle.value = 1;
    }

    console.log(general_data);
  };

  xhr.send("get_general");
}

general_s_form.addEventListener("submit", function (e) {
  e.preventDefault();
  update_general(site_tittle_edit.value, site_about.edit.value);
});

function update_general(site_tittle_value, site_about_value) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (this.responseText == 1) {
      alert("success", "Changed Update Successfully!");
      console.log("Data Updated Successfully");
      get_general();
    } else {
      showAlert("Warning", "No Changed Is Made!");
      console.log("No Updation are made");
    }
    console.log(this.responseText);
  };

  // Adjusted the data sent in xhr.send
  let data =
    "site_tittle=" +
    encodeURIComponent(site_tittle_value) +
    "&site_about=" +
    encodeURIComponent(site_about_value) +
    "&update_general";
  xhr.send(data);
}

function update_shutdown(val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (this.responseText.trim() === "1" && general_data.shutdown == 0) {
      showAlert("success", "Site has been shut down!");
    } else {
      showAlert("success", "Shutdown mode is off!");
    }
    get_general();
  };

  xhr.send("update_shutdown=" + val);
}

function get_contacts() {
  let contact_p_id = [
    "address",
    "gmap",
    "phone1",
    "phone2",
    "email",
    "fb",
    "tw",
    "ig",
  ];
  let iframe = document.getElementById("iframe");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    contacts_data = JSON.parse(this.responseText);
    contacts_data = Object.values(contacts_data);

    for (i = 0; i < contact_p_id.length; i++) {
      document.getElementById(contact_p_id[i]).innerText = contacts_data[i + 1];
    }
    iframe.src = contacts_data[9];

    contacts_inp(contacts_data);
  };
  xhr.send("get_contacts");
}

function contacts_inp(contacts_data) {
  let contacts_inp_id = [
    "address_inp",
    "gmap_inp",
    "phone1_inp",
    "phone2_inp",
    "email_inp",
    "fb_inp",
    "tw_inp",
    "ig_inp",
    "iframe_inp",
  ];

  for (i = 0; i < contacts_inp_id.length; i++) {
    document.getElementById(contacts_inp_id[i]).value = contacts_data[i + 1];
  }
}

contact_s_form.addEventListener("submit", function (e) {
  e.preventDefault();
  update_contacts();
});

function update_contacts() {
  let index = [
    "address",
    "gmap",
    "phone1",
    "phone2",
    "email",
    "fb",
    "tw",
    "ig",
    "iframe",
  ];
  let contacts_inp_id = [
    "address_inp",
    "gmap_inp",
    "phone1_inp",
    "phone2_inp",
    "email_inp",
    "fb_inp",
    "tw_inp",
    "ig_inp",
    "iframe_inp",
  ];
  let data_str = "";

  for (let i = 0; i < index.length; i++) {
    data_str +=
      index[i] +
      "=" +
      encodeURIComponent(document.getElementById(contacts_inp_id[i]).value) +
      "&";
  }
  data_str += "update_contact";

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (this.responseText.trim() === "1") {
      showAlert("success", "Changes Saved!");
      get_contacts();
    } else {
      showAlert("error", "No changes were made!");
    }
  };

  xhr.send(data_str);
}

team_s_form.addEventListener("submit", function (e) {
  e.preventDefault();
  update_team();
});

function add_member() {
  let data = new FormData();
  data.append("name", member_name_inp.value);
  data.append("picture", member_pic_inp.files[0]);
  data.append("add_member", "");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);

  xhr.onload = function () {
    if (this.responseText == "invalid-image-type") {
      showAlert("error", "ONLY JPG, JPED, PNG, WEBP formats are allowed!");
    } else if (this.responseText == "image-size-is-too-large") {
      showAlert("error", "IMAGE SHOULD BE LESS THAN 5MB");
    } else if (this.responseText == "image-upload-failed") {
      showAlert("error", "Image upload failed. Server down.");
    } else {
      showAlert("success", "Member Added Successfully");
      member_name_inp.value = "";
      member_pic_inp.value = "";
      get_members();
    }
  };

  xhr.send(data);
}

function get_members() {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    document.getElementById("team-data").innerHTML = this.responseText;
  };

  xhr.send("get_members");
}

function delete_member(val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (this.responseText == 1) {
      showAlert("success", "Member Deleted Successfully!");
      get_members();
    } else {
      showAlert("error", "Unable to remove member SERVER DOWN!");
    }
  };

  xhr.send("delete_member=" + val);
}

window.onload = function () {
  get_general();
  get_contacts();
  get_members();
};
