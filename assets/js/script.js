let btnText = document.querySelector('#btnLessText');
let btnHtml = document.querySelector('#btnMuchMoreText');
let content = document.querySelector('#contentJs');
let paragraph = document.querySelector('#gradient-description');

btnLessText.addEventListener('click', () => {
    paragraph.innerText = 'A smaller text; resize test!';
});

btnMuchMoreText.addEventListener('click', () => {
    paragraph.innerText = 'The Jesus Prayer,[a] also known as The Prayer,[b] is a short formulaic prayer esteemed and advocated especially within the Eastern churches: "Lord Jesus Christ, Son of God, have mercy on me, a sinner."[3] The prayer has been widely taught and discussed throughout the history of the Orthodox Church. The ancient and original form did not include the words "a sinner", which were added later.[4][5] It is often repeated continually as a part of personal ascetic practice, its use being an integral part of the eremitic tradition of prayer known as hesychasm.[c] The prayer is particularly esteemed by the spiritual fathers of this tradition (see Philokalia) as a method of cleaning and opening up the mind and after this the heart (kardia) and bringing about firstly the Prayer of the Mind or more correctly the Noetic Prayer (Νοερά Προσευχή) and after this the Prayer of the Heart (Καρδιακή Προσευχή). The Prayer of the Heart is considered to be the Unceasing Prayer that the Apostle Paul advocates in the New Testament.[d] Theophan the Recluse regarded the Jesus Prayer stronger than all other prayers by virtue of the power of the Holy Name of Jesus.';
});

btnResetText.addEventListener('click', () => {
    console.log('There and Back Again');
    paragraph.innerText = 'Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML.[1] CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.';
});
