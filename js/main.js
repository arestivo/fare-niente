'use strict'

// Get all done checkboxes and add an event listener
let doneCBs = document.querySelectorAll('article.list input[type=checkbox]')
doneCBs.forEach((doneCB) => doneCB.addEventListener('change', doneClicked))

// What happens when a done checkbox changes value
function doneClicked(event) {
  let doneCB = event.target
  let id = doneCB.getAttribute('data-id')

  // Ajax request
  let request = new XMLHttpRequest()
  request.open("post", "../api/api_item_done.php", true)
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
  request.addEventListener("load", function () {
    let item = JSON.parse(this.responseText)
    doneCB.checked = (item.item_done == 1) // closure
  })  
  request.send(encodeForAjax({item_id: id}))
}

// Helper function
function encodeForAjax(data) {
  return Object.keys(data).map(function(k){
    return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
  }).join('&')
}