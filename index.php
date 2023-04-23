<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>
<body class="flex justify-center h-screen items-center bg-sky-600">
    <div class="p-10 w-[900px] bg-white space-y-3 flex flex-col rounded-xl justify-center items-start">
        <div class="flex justify-start items-center space-x-5">
            <img src="lucca.png" class="w-[50px]" />
            <h1 class="text-[25px] font-bold">Istituzioni non profit della provincia di Lucca</h1>
        </div>
        <h3 class=" py-3">Dati primari: numero di istituzioni non profit attive e relativi addetti, lavoratori esterni e volontari, con sede legale in provincia di Lucca classificate per sezioni e divisioni ATECO 2007. Confronto fra censimenti Data di riferimento: 31 dicembre 2011. Fonte: ISTAT, Censimento delle Istituzioni Non Profit. Estrazione dei dati: a cura dell'Ufficio di Statistica della Provincia di Lucca, dalla banca dati i.stat. Eventuali errori sono a carico di chi ha effettuato l'estrazione e non devono essere imputati all'ISTAT. Dati aggiuntivi: variazioni nel numero di imprese, di addetti, di lavoratori esterni e di volontari Metadati e informazioni aggiuntive: a cura dell'Ufficio di Statistica della Provincia di Lucca.</h3>
        <button onClick="toggleTable()" class="px-4 py-3 transition-all hover:scale-95 hover:opacity-80 font-medium rounded-md bg-sky-600 text-white">Show Table</button>
    </div>
    <div id="blur" class="w-full h-full bg-[#00000030] duration-700 transition-all blur-off backdrop-blur-sm fixed top-0"></div>
    <div id="box" class="fixed w-[80%] h-[80%] transition-all duration-500 closed bg-white p-5 rounded-lg shadow-2xl top-1/2 translate-y-[-50%] left-1/2 translate-x-[-50%] overflow-y-scroll">
        <table id="toscana">
            <tr>
                <td>Sezioni</td>
                <td>Codice</td>
                <td>Istuzioni Att. 2001</td>
                <td>Istuzioni Att. 2011</td>
                <td>Variazione Istruzioni</td>
                <td>Addetti 2001</td>
                <td>Addetti 2011</td>
                <td>Variazione Addetti</td>
                <td>Lavoratori Esterni 2001</td>
                <td>Lavoratori Esterni 2011</td>
                <td>Variazione Lavoratori Esterni</td>
                <td>Volontari 2001</td>
                <td>Volontari 2011</td>
                <td>Variazione Volontari</td>
            </tr>
        </table>
        <button onClick="toggleTable()" class="bg-red-500 px-6 py-3 mt-5 transition-all hover:scale-95 hover:opacity-80 font-medium rounded-md text-white">Close Table</button>
    </div>
    <script src="./script.js" type="text/javascript"></script>
</body>
</html>
