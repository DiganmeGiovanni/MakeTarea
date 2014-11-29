
var validationActivated=false;

function testScriptLoad() {
    console.log("Script was load successful");
}

function cancelTask() 
{
    $('#task-title').val('');
    $('#task-desc').val('');
    
    newTask();
}

/**
 * Realiza las llamadas ajax para registrar una nueva tarea
 */
function addTarea() 
{
}

/**
 * Shows or hide the new task form
 */
function newTask() 
{
    var form = $('#form-nva-tarea');
    console.log(form.css('color'));
    if (form.css('color') === "rgb(255, 0, 0)") 
    {
        form.css('top', '15%');
        form.css('color', '#000');
        if (validationActivated == flase)
        {
            activarValidate();
            validationActivated = true;
        }
    }
    else 
    {
        form.css('top', '-66%');
        form.css('color', '#F00');
    }
}

function activarValidate() {
    $('#form-nva-tarea').validate();
}

function showNvoCursoForm() 
{
    var form = $('#form-nvo-curso');
    console.log(form.css('color'));
    if (form.css('color') === "rgb(255, 0, 0)") 
    {
        form.css('top', '15%');
        form.css('color', '#000');
    }
    else 
    {
        form.css('top', '-66%');
        form.css('color', '#F00');
    }
}

function showAddHoraclase() 
{
    var form = $('#form-nva-horaclase');
    console.log(form.css('color'));
    if (form.css('color') === "rgb(255, 0, 0)") 
    {
        form.css('top', '15%');
        form.css('color', '#000');
    }
    else 
    {
        form.css('top', '-66%');
        form.css('color', '#F00');
    }
}