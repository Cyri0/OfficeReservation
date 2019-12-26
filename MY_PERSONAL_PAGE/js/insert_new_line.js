var num=0;
function gimmeNewLine() {
var newLineToTable = `
    <tr id="tableLine`+num+`">
    <td scope="row">
        <input id="time`+num+`" type="number" name="" id="input" class="form-control" value="" min="1" max="45" step="1" required="required" title="Idő">
    </td>
    <td>
        <textarea id="activity`+num+`" class="form-control" rows="1" id="comment"></textarea>
    </td>
    <td>
       <input id="method`+num+`" type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
    </td>
    <td>
       <input id="workForm`+num+`" type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
    </td>
    <td>
       <input id="tools`+num+`" type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
    </td>
    <td>
        <textarea id="notes`+num+`" class="form-control" rows="1" id="comment"></textarea>
    </td>
    </tr>
    `;
    num++;
    document.getElementById("lessonPlan").innerHTML += newLineToTable;
}
gimmeNewLine();