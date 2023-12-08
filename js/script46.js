const itemFrame46 = document.querySelector('.portfolio__item__46list');
const itemList46 = [ /* {
  name: '06 木根森',
  img: 'img/',
  url: '',

},*//* {
  name: '07 末永',
  img: 'img/',
  url: '',

},*/ {
  name: '08 杉山',
  img: 'img/46/46sugiyama.png',
  url: 'https://hanayosugiyama.github.io/portfolio874/',

}, /*{
  name: '12 竹本',
  img: 'img/',
  url: '',

}, */ {
  name: '19 濱野',
  img: 'img/',
  url: '',

}, {
  name: '21 前田',
  img: 'img/46/46maeda.png',
  url: 'https://erihanapcschool.github.io/portfolio/',

},  {
  name: '23 村上',
  img: 'img/46/46murakami.png',
  url: 'https://yurina.cwith.jp',

},{
  name: '26 吉村',
  img: 'img/46/46yoshimura.png',
  url: 'https://yoshyoshyosh.com/portfolio/',
}];


itemList46.forEach((i) => {
  const { name,img,url, } = i;
  const itemContent46 = `<li class="p-size"><a href="${url}" target="_blank"><div class="portfolio__item__img"><img src="${img}" alt="${name}"></div>
  <div class="portfolio__item__text"><p>${name}</p></div></a></li>`;
  itemFrame46.insertAdjacentHTML('beforeend', itemContent46);
})