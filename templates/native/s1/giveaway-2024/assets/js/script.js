const canvas = document.getElementById('wheel');
const ctx = canvas.getContext('2d');
const modal = new bootstrap.Modal(document.getElementById('resultModal'));
const modalTitle = document.getElementById('resultModalLabel');
const modalText = document.getElementById('resultText');
const modalImage = document.getElementById('resultImage');
const modalButton = document.getElementById('resultButton');

canvas.width = 300;
canvas.height = 300;

// Definicija segmenata kola (svako polje ima sliku)
const segments = [
  { image: 'assets/images/img1.png', label: 'Opcija 1' },
  { image: 'assets/images/img2.png', label: 'Opcija 2' },
  { image: 'assets/images/img3.png', label: 'Opcija 3' },
  { image: 'assets/images/img4.png', label: 'Opcija 4' },
  { image: 'assets/images/img5.png', label: 'Opcija 5' },
  { image: 'assets/images/img6.png', label: 'Opcija 6' },
  { image: 'assets/images/img7.png', label: 'Opcija 7' },
  { image: 'assets/images/img8.png', label: 'Opcija 8' },
  { image: 'assets/images/img9.png', label: 'Opcija 9' },
  { image: 'assets/images/img10.png', label: 'Opcija 10' },
];
const anglePerSegment = (2 * Math.PI) / segments.length;

// Pop-up sadržaji za različite datume
const popupData = [
  {
    date: new Date('2024-12-09'),
    title: 'Fotelja',
    text: 'Ovo je tekst za razdoblje od 9. do 11. prosinca.',
    image: 'assets/images/popup1.jpeg',
    button: { text: 'Vodi me na natječaj', link: 'https://www.instagram.com/super1.hr/' }
  },
  {
    date: new Date('2024-12-11'),
    title: 'Ziaja',
    text: 'Ovo je tekst za razdoblje od 11. do 14. prosinca.',
    image: 'assets/images/popup2.jpeg',
    button: { text: 'Vodi me na natječaj', link: 'https://www.instagram.com/super1.hr/' }
  },
  {
    date: new Date('2024-12-14'),
    title: 'Merci',
    text: 'Ovo je tekst za razdoblje od 14. do 17. prosinca.',
    image: 'assets/images/popup3.jpeg',
    button: { text: 'Vodi me na natječaj', link: 'https://www.instagram.com/super1.hr/' }
  },
  {
    date: new Date('2024-12-17'),
    title: 'Dermatologica',
    text: 'Ovo je tekst za razdoblje nakon 17. prosinca.',
    image: 'assets/images/popup4.jpeg',
    button: { text: 'Vodi me na natječaj', link: 'https://www.instagram.com/super1.hr/' }
  }
];

// Funkcija za formatiranje datuma u `toLocaleDateString` format
function formatDate(date) {
  return date.toLocaleDateString('hr-HR'); // koristi hrvatski format (dd.mm.gggg)
}

// Crtanje kola sa slikama
function drawWheel() {
  for (let i = 0; i < segments.length; i++) {
    const angleStart = i * anglePerSegment;
    const angleEnd = (i + 1) * anglePerSegment;

    // Crtanje segmenta
    ctx.beginPath();
    ctx.moveTo(150, 150);
    ctx.arc(150, 150, 150, angleStart, angleEnd);
    ctx.fillStyle = "#000"; // Pozadina dok slika ne učita
    ctx.fill();
    ctx.closePath();

    // Učitaj sliku za ponavljanje
    const img = new Image();
    img.src = segments[i].image;

    img.onload = () => {
      const pattern = ctx.createPattern(img, 'repeat'); // Ponavljanje slike
      ctx.save();
      ctx.beginPath();
      ctx.moveTo(150, 150);
      ctx.arc(150, 150, 150, angleStart, angleEnd);
      ctx.closePath();
      ctx.clip(); // Clip na segment
      ctx.fillStyle = pattern;
      ctx.fillRect(0, 0, canvas.width, canvas.height); // Popuni segment ponavljanjem slike
      ctx.restore();
    };
  }
}

drawWheel();

// Logika vrtnje kola
document.getElementById('spinButton').addEventListener('click', () => {
  const rotation = Math.floor(Math.random() * 360 + 720); // Nasumična rotacija između 720 i 1080 stupnjeva
  const selectedSegmentIndex = Math.floor(((rotation % 360) / (360 / segments.length)) % segments.length);

  canvas.style.transform = `rotate(${rotation}deg)`;

  setTimeout(() => {
    // Dobavljanje podataka za pop-up
    const todayFormatted = formatDate(new Date()); // Formatirani trenutni datum
    const today = popupData.filter(data => formatDate(data.date) <= todayFormatted)
                            .sort((a, b) => new Date(b.date) - new Date(a.date))[0] || popupData[0];

    modalTitle.textContent = today.title;
    modalText.textContent = today.text;
    modalImage.src = today.image;
    modalButton.textContent = today.button.text;
    modalButton.onclick = () => window.open(today.button.link, '_blank');
    modal.show();
  }, 4000); // Čekaj dok se animacija završi
});
