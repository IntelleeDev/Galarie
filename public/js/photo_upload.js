(function() {
  var submitButton = document.getElementById('submit_button')
  var uploadCanvas = $('#upload_canvas')
  var photosInputField = document.getElementById('photo_input_field')

  function openFileDialog() {
    clearUploadCanvas() 
    photosInputField.click()   
  }

  function processSelectedFiles(event) {
    var files = event.target.files    
    var disposableDiv = $('<div/>')

    for (var i = 0; i < files.length; i++) {
      
      (function() {
        var file = files[i]
        var fileReader = new FileReader()
        fileReader.addEventListener('load', function(event) {
          var photoItem = $('<div/>', { class: 'photo-item' })
              selectedImage = $('<img/>', { src: fileReader.result })

          photoItem.append(selectedImage)
          disposableDiv.append(photoItem)
          uploadCanvas.append(disposableDiv.children().unwrap())
        })
        fileReader.readAsDataURL(file)
      }())
    }      
  }

  function submitForm() {
    var form = document.getElementById('upload_form')
    form.submit()
  }

  function setUpEventListeners() {
    uploadCanvas.on('click', openFileDialog)
    submitButton.addEventListener('click', submitForm)
    photosInputField.addEventListener('change', processSelectedFiles)
  }

  function clearUploadCanvas() {
    uploadCanvas.empty()
    hideClickToOpenPromptText()
  }

  function showClickToOpenPromptText() {
    $('.prompt-text').show()
  }

  function hideClickToOpenPromptText() {
    $('.prompt-text').hide()
  }

  window.addEventListener('load', function(event) {
    setUpEventListeners()
  })

}())