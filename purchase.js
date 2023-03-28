let mid;
function addVariation(rowid) {
  // alert(rowid);
  $("#myModal").modal("show");
  // document.getElementById("modrowid").value = rowid;
  mid = rowid;
}

function addRow() {
  let prod_code = document.getElementById("prod_code").value;
  let prod_name = document.getElementById("prod_name").value;
  let invoice = document.getElementById("invoice").value;
  let prod_qty = parseInt(document.getElementById("prod_qty").value);
  let purchase_price = parseInt(
    document.getElementById("purchase_price").value
  );
  let sale_price = parseInt(document.getElementById("sale_price").value);
  let total = prod_qty * purchase_price;
  // let total=prod_qty * purchase_price;
  let rowid = parseInt(document.getElementById("rowid").value);

  // for (let i = 1; i <= prod_qty; i++) {
  // let theTable = parseInt(document.getElementById("tableid").value).getElementByTagName('tbody')[0];
  // for(let therow of theTable.rows) {
  //   let line="";
  //   for(let thecell of therow.cells){
  //     line= line + thecell.innerText +'**';
  //   }
  //   alert(line);
  // }

  // i++;
  // alert(i);
  $("#tableid").append(
    "<tr id='row'" +
      rowid +
      "'><td>" +
      rowid +
      "</td><td>" +
      invoice +
      "</td><td>" +
      prod_code +
      "</td><td>" +
      prod_name +
      "</td> <td>" +
      prod_qty +
      "</td><td>" +
      purchase_price +
      "</td><td>" +
      sale_price +
      "</td><td><button type='button' class='deleteBtn btn btn-danger' onclick='addVariation(" +
      rowid +
      ")'>Add Variation</button></td><td>" +
      total +
      "</td></tr>"
  );
  rowid = rowid + 1;
  document.getElementById("rowid").value = rowid;

  // }

  let table = document.getElementById("tableid"),
    sumVal = 0;
  for (let i = 1; i < table.rows.length; i++) {
    sumVal = sumVal + parseInt(table.rows[i].cells[8].innerHTML);
  }
  document.getElementById("val").innerHTML = "sum value = " + sumVal;
  alert(sumVal);
  document.getElementById("allTotal").value = sumVal;
}

// function addVariation(){
//     alert("shuham");
// }
// function deleterow(e) {
//     if (!e.target.classList.contains("deleteBtn")) {
//         return;
//     }

//     const btn = e.target;
//     btn.closest("tr").remove();
// }
<tr id="row" ${rowid}>
  <td>${rowid} </td>
  <td>${invoice}</td>
  <td>${prod_code}</td>
  <td>${prod_name}</td>
  <td>${prod_qty} </td>
  <td>${purchase_price}</td>
  <td>${sale_price}</td>
  <td><button
      type="button"
      class="deleteBtn btn btn-danger"
      onclick='addVariation("rowid")'
    >
      Add Variation
    </button>
  </td>
  <td>${total}</td>
</tr>;
