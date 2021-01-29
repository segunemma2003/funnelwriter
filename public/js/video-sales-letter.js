const addInputs = document.querySelectorAll(".form .add");
addInputs.forEach(addInput => addInput.addEventListener("click", addElement));
if(MicroModal) MicroModal.init();
const generateBtn = document.querySelector(".generate-btn");
bind(generateBtn, "click", fillEditor);
clearInputs();


const form1 = document.querySelector('.questions');

const  downloadPPt= async () =>{
  $data=[]
  total=0
  form1.querySelectorAll('.input').forEach((input)=>{
    total+=1
    console.log(total);
    return;
      $data.push(input.value)
  }) 
 return;
  let response= await axios.post('/webinar/ppt',{$data}).then((res)=>{
      console.log(res.data.data)
      window.open("/"+res.data.data)
    }).catch((err)=>{
      console.log(err)
    })
 

}
summerConfig = {
  tabsize: 2,
  toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'underline', 'italic',]],
    ['insert', ['lin""k']],
    ['para', ['ul', 'ol']],
    ['font', [ 'superscript', 'subscript']]
  ]
};
$('#summernote').summernote(summerConfig);
$('#summernote').summernote('poppins', 'Arial')


function bind(el, event, callback){
  el.addEventListener(event, callback);
}

function clearInputs() {
  let inputs = document.querySelectorAll("input");
  inputs.forEach(input => {
    input.value = "";
  })
}

function addElement (e){

  const questions = this.previousElementSibling.cloneNode(true);
  
  // if(questions.querySelector(".no")){
  //   const position = 1 + +questions.querySelector(".no").textContent;
  //   questions.querySelectorAll(".no").forEach( no => no.textContent = position);
  //   questions.querySelectorAll("input").forEach( input =>{ input.value = ""});
  // }
  // else{
  //   questions.value = "";
  // }
myclass=this.previousElementSibling.className;
questions.className=myclass
console.log(questions);

  this.parentNode.insertBefore(questions, this);
}

async function fillEditor() {
  data=[];
  total=0
  let answers = [...document.querySelectorAll("li input")].map((input,x) => {
    input.value ? `<p>${input.value}</p><br>` : ""
   
    // if(input.className=='pd' && (total>6&& total<12)){
    //   data[total]=input.value;
    // }
    if(x>6 && x< 12 && input.className!='pd'){
      mynum=document.getElementsByClassName('pd').length;
      total+=(6-mynum);
    }else
    // if(input.className=='xs'&& (total>16&& total<20)){
    //   data[total]=input.value;
    // }
    if(x>16 && x< 20 && input.className!='xs'){
      mynum=document.getElementsByClassName('xs').length;
      total+=(4-mynum);
    }else
    // if(input.className=='xz'&& (total>19&& total<30)){
    //   data[total]=input.value;
    // }
    if(x>19 && x< 30 && input.className!='xz'){
      mynum=document.getElementsByClassName('xz').length;
      total+=(11-mynum);
    }else
    // if(input.className=='zc'&& (total>34&& total<40)){
    //   data[total]=input.value;
    // }
    if(x>34 && x< 40 && input.className!='zc'){
      mynum=document.getElementsByClassName('zc').length;
      total+=(6-mynum);
    }else
    // if(input.className=='qa'&& (total>39&& total<45)){
    //   data[total]=input.value;
    // }
    if(x>39 && x< 45 && input.className!='qa'){
      mynum=document.getElementsByClassName('qa').length;
      total+=(6-mynum);
    }else{
      total+=1
    }
    data[total]=input.value;
    
  
  });
  console.log(data);
  console.log(answers);
  let response= await axios.post('/videosales/ppt',{data}).then((res)=>{
    console.log(res.data.data)
    window.open("/"+res.data.data)
  }).catch((err)=>{
    console.log(err)
  })

  // document.querySelector(".note-editable").innerHTML = answers.join(" ");
}