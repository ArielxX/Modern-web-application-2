function addFileField() {
    let addInputBtn = document.getElementById("input-btn");
    let inputText = document.createElement("input");
    let removeButton = document.createElement("button");
    let newLine = document.createElement("br");

    let amount = document.getElementsByName("tags[]").length;

    // Setting input attributes
    newLine.setAttribute("id", "line" + amount);

    inputText.setAttribute("name", "tags[]");
    inputText.setAttribute(
        "style",
        "color: green; padding: 8px 15px; margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box;"
    );
    inputText.setAttribute("id", "tag" + amount);

    removeButton.innerHTML = " X ";
    removeButton.setAttribute("style", "color: red; margin: 8px");
    removeButton.setAttribute("onclick", "removeTag(this.id)");
    removeButton.setAttribute("id", amount);

    // Insert dom elements
    addInputBtn.parentNode.insertBefore(newLine, addInputBtn);
    addInputBtn.parentNode.insertBefore(inputText, addInputBtn);
    addInputBtn.parentNode.insertBefore(removeButton, addInputBtn);
}

function removeTag(clicked_id) {
    var tag = document.getElementById("tag" + clicked_id);
    var x = document.getElementById(clicked_id);
    var line = document.getElementById("line" + clicked_id);
    tag.parentNode.removeChild(tag);
    x.parentNode.removeChild(x);
    line.parentNode.removeChild(line);
}
