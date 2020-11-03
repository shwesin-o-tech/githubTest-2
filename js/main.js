$(document).ready(function(){

   $(".left_bar .fa-bars").click(function(){
        //console.log("heoo");
      $(".wrapper").addClass("active");
    });

   $(".close").click(function(){
        //console.log("heoo");
      $(".wrapper").removeClass("active");
   });




    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeBtn")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
      
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    //click bottom
    var leftBtn = document.getElementsByClassName("fa-arrow-alt-circle-left")[0];
    leftBtn.onclick=function(){
      modal.style.display="none";
      console.log("hello");
    }

 });

    
  //click modal box

var tel_txt = document.getElementById("show-input"); // to show modal box when click that input
var modal = document.getElementById("tel-modal"); // modal box
var txt = document.getElementById("txt_modal"); // input box that include in modal box
txt.value = "";
var tel_ok= document.getElementById("tel_ok");

tel_txt.onclick=function(){
  modal.style.display="block";

  document.getElementById("t1").onclick=function(){
    txt.value += "1";
    tel_ok.onclick=function(){
       tel_txt.value = txt.value;
       modal.style.display="none";
    }
   
  };

  document.getElementById("t2").onclick=function(){
    txt.value += "2";
    tel_ok.onclick=function(){
       tel_txt.value = txt.value;
       modal.style.display="none";
    }
  };
  document.getElementById("t3").onclick=function(){
    txt.value += "3";
    tel_ok.onclick=function(){
       tel_txt.value = txt.value;
       modal.style.display="none";
    }
  };
  document.getElementById("t4").onclick=function(){
    txt.value += "4";
    tel_ok.onclick=function(){
       tel_txt.value = txt.value;
       modal.style.display="none";
    }
  };
  document.getElementById("t5").onclick=function(){
    txt.value += "5";
    tel_ok.onclick=function(){
       tel_txt.value = txt.value;
       modal.style.display="none";
    }
  };
  document.getElementById("t6").onclick=function(){
    txt.value += "6";
    tel_ok.onclick=function(){
       tel_txt.value = txt.value;
       modal.style.display="none";
    }
  };
  document.getElementById("t7").onclick=function(){
    txt.value += "7";
    tel_ok.onclick=function(){
       tel_txt.value = txt.value;
       modal.style.display="none";
    }
  };
  document.getElementById("t8").onclick=function(){
    txt.value += "8";
    tel_ok.onclick=function(){
       tel_txt.value = txt.value;
       modal.style.display="none";
    }
  };
  document.getElementById("t9").onclick=function(){
    txt.value += "9";
    tel_ok.onclick=function(){
       tel_txt.value = txt.value;
       modal.style.display="none";
    }
  };
  document.getElementById("t0").onclick=function(){
    txt.value += "0";
    tel_ok.onclick=function(){
       tel_txt.value = txt.value;
       modal.style.display="none";
    }
  };
 
  document.getElementById("tc").onclick=function(){
    txt.value = "";
    tel_txt.value=txt.value;
    
  };
};

// modal close
document.getElementById("close").onclick=function(){
  modal.style.display = 'none';
};

 
//For Fax 
var fax_txt = document.getElementById("fax-input"); // to show modal box when click that input
var f_modal = document.getElementById("fax-modal"); // modal box
var f_txt = document.getElementById("fax"); // input box that include in modal box
f_txt.value = "";
var fex_ok= document.getElementById("fax_ok");

fax_txt.onclick=function(){
  f_modal.style.display="block";

  document.getElementById("f1").onclick=function(){
    f_txt.value += "1";

    fex_ok.onclick=function(){
      fax_txt.value = f_txt.value;
      f_modal.style.display="none";
    }

    
  };

  document.getElementById("f2").onclick=function(){
    f_txt.value += "2";

     fex_ok.onclick=function(){
      fax_txt.value = f_txt.value;
      f_modal.style.display="none";
    }

  };

  document.getElementById("f3").onclick=function(){
    f_txt.value += "3";

     fex_ok.onclick=function(){
      fax_txt.value = f_txt.value;
      f_modal.style.display="none";
    }

  };

  document.getElementById("f4").onclick=function(){
    f_txt.value += "4";

     fex_ok.onclick=function(){
      fax_txt.value = f_txt.value;
      f_modal.style.display="none";
    }

  };

  document.getElementById("f5").onclick=function(){
    f_txt.value += "5";

    fex_ok.onclick=function(){
      fax_txt.value = f_txt.value;
      f_modal.style.display="none";
    }

  };

  document.getElementById("f6").onclick=function(){
    f_txt.value += "6";

     fex_ok.onclick=function(){
      fax_txt.value = f_txt.value;
      f_modal.style.display="none";
    }

  };

  document.getElementById("f7").onclick=function(){
    f_txt.value += "7";

     fex_ok.onclick=function(){
      fax_txt.value = f_txt.value;
      f_modal.style.display="none";
    }

  };
  document.getElementById("f8").onclick=function(){
    f_txt.value += "8";

     fex_ok.onclick=function(){
      fax_txt.value = f_txt.value;
      f_modal.style.display="none";
    }

  };
  document.getElementById("f9").onclick=function(){
    f_txt.value += "9";
    
     fex_ok.onclick=function(){
      fax_txt.value = f_txt.value;
      f_modal.style.display="none";
    }

  };
  document.getElementById("f0").onclick=function(){
    f_txtf_txt.value += "0";
    
     fex_ok.onclick=function(){
      fax_txt.value = f_txt.value;
      f_modal.style.display="none";
    }

  };
 
  document.getElementById("fc").onclick=function(){
    f_txt.value = "";
    fax_txt.value =f_txt.value;
   
  };
};
// f_modal close
document.getElementById("colse-btn").onclick=function(){
  f_modal.style.display = 'none';
};


// Construction Modal
var c_modal = document.getElementById("construction-modal");
var operation=document.getElementById("construction_operation");
var construction_ok= document.getElementById("con_ok");
var construction_tr =document.getElementById("tr_bg");
var name="";   
var div='';
 var i=-1; var t1="", t2="";var table;
operation.onclick=function(){
var arr=[];

   c_modal.style.display = 'block';

table = document.getElementById("mytable");
if (table) {
  for (var i = 0; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
      tableText(this);
    };
  }
}

function tableText(tableRow) {
  t1 = tableRow.cells[0].innerHTML;
  t2 = tableRow.cells[1].innerHTML;
  var obj = {'name': t1, 'age': t2};
  console.log('oooooooooooooooooo',obj);
   arr.push([t1,t2]);
        
}
construction_ok.onclick = function(){

         console.log(arr);
// console.log('count :',i);
    for (var j = 0; j < arr.length; j++)
    {
        div = document.createElement('div'); //create new div
        div.className = 'add_construction_div';
        div.innerHTML = arr[j][0] + arr[j][1];
        arr[j][0] = [];
        arr[j][1] = [];
        document.getElementById("add-date").appendChild(div);
    }
            // document.getElementById("add-date").appendChild(div1);
        
// document.getElementById('div1').style.display = 'block';
          c_modal.style.display = 'none';

        };


}



//close
document.getElementById("c_fa_times").onclick=function(){
  c_modal.style.display = 'none';
}

//Except for Construction Modal
var e_modal = document.getElementById("e_construction-modal");//except for construction modal
var e_operation=document.getElementById("except-construction");
e_operation.onclick=function(){
  e_modal.style.display="block";

}
//close
document.getElementById("e_fa_times").onclick=function(){
  
  e_modal.style.display = 'none';
}




//Doughnut chart
var ctx=document.getElementById('myChart').getContext('2d');
var data = {
  labels: [
    "Rent",
    "Stock",
  ],
  datasets: [
    {
      data: [100, 50],
      backgroundColor: [
        "#13A2D7",
        "#A3E4FC",
       
      ],
      hoverBackgroundColor: [
        "#13A2D6",
        "#A3E4FC",
        
      ]
    }]
};

var promisedDeliveryChart = new Chart(document.getElementById('myChart'), {
  type: 'doughnut',
  data: data,
  options: {
    responsive: true,
    legend: {
      display: false
    }
  }
});

Chart.pluginService.register({
  beforeDraw: function(chart) {
    var width = chart.chart.width,
        height = chart.chart.height,
        ctx = chart.chart.ctx;

    ctx.restore();
    var fontSize = (height / 120).toFixed(2);
    ctx.font = fontSize + "em sans-serif";
    ctx.textBaseline = "middle";

    var text = "199.99%",
        textX = Math.round((width - ctx.measureText(text).width) / 2),
        textY = height / 2;

    ctx.fillText(text, textX, textY);
    ctx.save();
  }
});


///pagination active
 $('li').click(function() {
  
        $('#pagination.active').removeClass("active");
        $(this).addClass("active");
 });
    
  