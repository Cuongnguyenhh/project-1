const menuMobileOpen = document.getElementById('menu-mobile');
const menuMobileClose = document.getElementById('nav-menu-close');
const menuBarMobile = document.getElementById('navbar-menu');

if (menuMobileOpen) {
      menuBarMobile.addEventListener('click', () => {
            menuBarMobile.classList.add('show');
      })
}
if (menuMobileClose) {
      menuBarMobile.addEventListener('click', () => {
            menuBarMobile.classList.remove('show');
      })
}

function tabs(e, tabsName) {
      var i, tabPane, tabItem;
      tabPane = document.getElementsByClassName('tab-pane');
      for (i = 0; i < tabPane.length; i++) {
            tabPane[i].style.display = 'none';
      }
      tabItem = document.getElementsByClassName('tab-item');
      for (i = 0; i < tabItem.length; i++) {
            tabItem[i].className = tabItem[i].className.replace(' active', '');
      }
      document.getElementById(tabsName).style.display = 'block';
      e.currentTarget.className += ' active';
}

const App = document.querySelector('.app');
const CartBtn = document.querySelector('.onclickBtn');
const DrawerMoved = document.querySelector('.cart-drawer');
const btnDrawerClose = document.querySelector('.cart-drawer-close');
if (CartBtn) {
      CartBtn.addEventListener('click', () => {
            App.classList.add('app-moved');
            App.classList.add('is-transition');
            DrawerMoved.classList.add('cart-drawer-moved');
      });
}
if (btnDrawerClose) {
      btnDrawerClose.addEventListener('click', () => {
            App.classList.remove('app-moved');
            App.classList.remove('is-transition');
            DrawerMoved.classList.remove('cart-drawer-moved');
      });
}





// INCREASE 

const minus = document.querySelectorAll('.addcard-qty-minus');
const plus = document.querySelectorAll('.addcard-qty-plus');
const inputCount = document.querySelector('.addcard-qty input');


plus.forEach(item => {
      item.addEventListener('click', () => {
            // const cokk = 
            var input = item.parentElement.children[1]
            input.value = parseInt(input.value) + 1;
      })
});


minus.forEach(item => {
      item.addEventListener('click', () => {
            var input = item.parentElement.children[1]
            input.value <= 1 ? input.value = 1 : input.value = parseInt(input.value) - 1;

      })
});

// for(var i = 0; i < plus.length; i++) {
//       if (plus[i]) {
//             plus[i].addEventListener('click', () => {
//                   inputCount[i].value = parseInt(inputCount.value) + 1;
//             })
//       }
// }


// for(var i = 0; i < minus.length; i++) {
//       if (minus[i]) {
//             minus[i].addEventListener('click', () => {
//                   if (inputCount.value <= 1) {
//                         inputCount.value = 1
//                   } else {
//                         inputCount.value = parseInt(inputCount.value) - 1;
//                   }
//             })
//       }
// }

// if (plus) {
//       plus.addEventListener('click', () => {
//             inputCount.value = parseInt(inputCount.value) + 1;
//       })
// }

// if (minus) {
//       minus.addEventListener('click', () => {
//             if (inputCount.value <= 1) {
//                   inputCount.value = 1;
//             } else {
//                   inputCount.value = parseInt(inputCount.value) - 1;
//             }
//       });
// }

