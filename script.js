const indexes = [
    'Sezioni',
    'Codice',
    'Istuzioni Att. 2001',
    'Istuzioni Att. 2011',
    'Variazione Istruzioni',
    'Addetti 2001',
    'Addetti 2011',
    'Variazione Addetti',
    'Lavoratori Esterni 2001',
    'Lavoratori Esterni 2011',
    'Variazione Lavoratori Esterni',
    'Volontari 2001',
    'Volontari 2011',
    'Variazione Volontari'
]

const clearTable = () => {
    const table = document.getElementById('toscana')
    table.innerHTML = ''
}

const drawTable = (data) => {
    const table = document.getElementById('toscana')
    console.log(data)
    clearTable()
    const firstRow = table.insertRow(0)
    for (let idx in indexes) {
        const currCel = firstRow.insertCell(idx)
        currCel.innerHTML = indexes[idx]
    }
    for (let row in data) {
        const currRow = table.insertRow(parseInt(row) + 1)
        for (let col in Object.keys(data[row])) {
            const currCel = currRow.insertCell(col)
            currCel.innerHTML = data[row][Object.keys(data[row])[col]]
        }
    }
}

const showAllTable = () => {
    fetch('/include/toscana.php')
        .then(res => {
            if (res.ok) return res.json()
            alert('Database non funzionante')
        })
        .then(data => {
            drawTable(data)
            openTable()
        })
}

const openTable = (withBlur = true) => {
    const table = document.getElementById('box')
    const blur = document.getElementById('blur')
    table.classList.remove('closed')
    if (withBlur) blur.classList.remove('blur-off')
}

const closeTable = (withBlur = true) => {
    const table = document.getElementById('box')
    const blur = document.getElementById('blur')
    table.classList.add('closed')
    if (withBlur) blur.classList.add('blur-off')
}

const toggleAdv = () => {
    const adv = document.getElementById('advBox')
    const blur = document.getElementById('blur')
    adv.classList.toggle('closed')
    blur.classList.toggle('blur-off')
}

const feedIndex = document.querySelectorAll('.feed-index')
for (let feed of feedIndex) {
    for (let idx of indexes) {
        const option = document.createElement('option')
        option.text = idx
        option.value = idx
        feed.appendChild(option)
    }
}

const feedRange = document.querySelectorAll('.feed-range')
for (let feed of feedRange) {
    // Add Opts
	const range = parseInt(feed.className.split(' ').find(el => el.startsWith('range-')).slice(6))
    for (let i = 1; i <= range; i++) {
        const opt = document.createElement('option')
        opt.text = i
        opt.value = i
        feed.appendChild(opt)
    }
    const maxOpt = document.createElement('option')
    const customOpt = document.createElement('option')
    
    maxOpt.text = 'MAX'
    maxOpt.value = 'MAX'
    maxOpt.selected = true
    
    customOpt.text = 'CUSTOM'
    customOpt.value = 'CUSTOM'
    
    feed.appendChild(maxOpt)
    feed.appendChild(customOpt)

    // OnChange
    feed.addEventListener('change', (e) => {
        const identifier = feed.id.slice(0, feed.id.split('').indexOf('-') + 1)
        const target = document.querySelector('#' + identifier + 'custom')
        if (!target) return

        if (e.target.value === 'CUSTOM') target.classList.remove('dont-show')
        else target.classList.add('dont-show')
    })
}

const advSearch = () => {
    const sortValue = document.getElementById('sort-box').value
    const sortDir = document.getElementById('sort-dir-box').value
    const limit = document.getElementById('range-res').value === 'CUSTOM' ? document.getElementById('range-custom').value : document.getElementById('range-res').value
    fetch('/include/toscana.php?' + new URLSearchParams({
        sort: sortValue,
        sortDir: sortDir,
        limit: limit
    }))
        .then(res => {
            if (res.ok) return res.json()
            alert('Database non funzionante')
        })
        .then(data => {
            drawTable(data)
            openTable()
        })
}

const closeTableHandler = () => {
    if (document.getElementById('advBox').classList.contains('closed')) closeTable()
    else closeTable(false)
}