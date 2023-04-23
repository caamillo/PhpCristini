fetch('/include/toscana.php')
    .then(res => {
        if (res.ok) return res.json()
        alert('Database non funzionante')
    })
    .then(data => {
        const table = document.getElementById('toscana')
        console.log(data)
        for (let row in data) {
            const currRow = table.insertRow(row)
            for (let col in Object.keys(data[row])) {
                const currCel = currRow.insertCell(col)
                currCel.innerHTML = data[row][Object.keys(data[row])[col]]
            }
        }
    })