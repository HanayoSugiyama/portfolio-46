const itemFrame46 = document.querySelector('.portfolio__item__46list');
const itemList46 = [{
  name: '03 江藤',
  img: 'img/',
  url: '',
}, {
  name: '04 奥田',
  img: 'img/',
  url: '',

}, {
  name: '05 梶原',
  img: 'img/',
  url: '',

}, {
  name: '06 木根森',
  img: 'img/',
  url: '',

}, {
  name: '07 末永',
  img: 'img/',
  url: '',

}, {
  name: '08 杉山',
  img: 'img/',
  url: '',

}, {
  name: '09 園田',
  img: 'img/',
  url: '',

}, {
  name: '10 高橋',
  img: 'img/',
  url: '',

}, {
  name: '11 ',
  img: 'img/',
  url: '',

}, {
  name: '12',
  img: 'img/',
  url: '',

}, {
  name: '13',
  img: 'img/',
  url: '',

}, {
  name: '14',
  img: 'img/',
  url: '',

}, {
  name: '15',
  img: 'img/',
  url: '',

}, {
  name: '16',
  img: 'img/',
  url: '',

}, {
  name: '17',
  img: 'img/',
  url: '',

}, {
  name: '18',
  img: 'img/',
  url: '',

}, {
  name: '19',
  img: 'img/',
  url: '',

}, {
  name: '20 ',
  img: 'img/',
  url: '',

}, {
  name: '21',
  img: 'img/',
  url: '',

}, {
  name: '22',
  img: 'img/',
  url: '',

}, {
  name: '23',
  img: 'img/',
  url: '',

}, {
  name: '25',
  img: 'img/',
  url: '',

},{
  name: '26',
  img: 'img/',
  url: '',
}];


itemList46.forEach((i) => {
  const { name,img,url, } = i;
  const itemContent46 = `<li><a href="${url}" target="_blank"><div class="portfolio__item__img"><img src="${img}" alt="${name}"></div>
  <div class="portfolio__item__text"><p>${name}</p></div></a></li>`;
  itemFrame46.insertAdjacentHTML('beforeend', itemContent46);
})