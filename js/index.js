////////////////////////// Get from the server /////////////////////////////////
function getData(){
  const xhr = new XMLHttpRequest(); 
  xhr.open("POST", "../php/data.php"); 
  xhr.onload = function(){ 
    const dataString = this.response; 
    console.log(dataString); // STRING 
    const dataArray = JSON.parse(dataString); 
    //console.log(dataArray); // ARRAY
    ///
    const len = (dataArray.length)-1;
    console.log(len);
    console.log(dataArray[len]);
    const fname = dataArray[len].fname;
    const lname = dataArray[len].lname;
    const phrase = dataArray[len].phrase;

    let html = dataArray.reduce(function(accum, currentValue){
      accum += `<tr><td>${currentValue.fname}</td><td>${currentValue.lname}</td><td>${currentValue.phrase}</td></tr>`;
      return accum;
    },'');
    console.log(html);
    console.log(phrase);
    document.getElementById("data").innerHTML = html;
    document.getElementById("titlePage").innerHTML = phrase;
  }; 
  xhr.send();
}

//setInterval(getData,3000);
