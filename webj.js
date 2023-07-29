
document.addEventListener("DOMContentLoaded", function () { 

    const clickToRecordButton = document.getElementById("click_to_record");
    const convertTextArea = document.getElementById("convert_text");
    let recognition;
  
    clickToRecordButton.addEventListener("click", function () {

      if ("SpeechRecognition" in window || "webkitSpeechRecognition" in window ) {
        recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
        recognition.interimResults = true;
  
        recognition.addEventListener("result", function (e) {
          const transcript = Array.from(e.results)
            .map((result) => result[0])
            .map((result) => result.transcript)
            .join("");
  
          convertTextArea.value = transcript;
        });
  
        recognition.addEventListener("end", function () {
          recognition.stop();
          
        });
  
        recognition.start();
        
      }
    });
    

  });
