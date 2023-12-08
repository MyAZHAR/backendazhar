/**
 * Fungsi untuk menampilkan hasil download
 * @param {function} result - Nama file yang didownload
 */

const showDownload = (result) => {
    console.log("Download berhasil");
    console.log(`Hasil Download: ${result}`);
}

/**
 * Fungsi untuk download file
 * @param {function} callback - Function callback show
 */
const download = (showDownload) => {
    return new Promise(function () {
        setTimeout(function () {
            const result = "windows-10.exe";
            showDownload(result);
        }, 3000);
    });
};

const main = async () => {
    console.log(await download(showDownload));
};
main();

/**
 * TODO:
 * - Refactor callback ke Promise atau Async Await
 * - Refactor function ke ES6 Arrow Function
 * - Refactor string ke ES6 Template Literals
 */