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
const totalPrice = document.querySelectorAll('.total-price');
const resultTotal = document.querySelector('.result-total')
const countPrice = document.querySelectorAll('.count-price')

plus.forEach((item, index) => {
      item.addEventListener('click', () => {
            var input = item.parentElement.children[1]
            input.value = parseInt(input.value) + 1
            var total = input.value * countPrice[index].innerText
            totalPrice[index].innerText = total
            resultTotal.innerText = Number(resultTotal.innerText) + Number(countPrice[index].innerText)
      })
});

minus.forEach((item, index) => {
      item.addEventListener('click', () => {
            var input = item.parentElement.children[1]
            if (input.value <= 1) {
                  input.value = 1
            } else {
                  input.value = parseInt(input.value) - 1
                  if (input.value < 1) {
                        resultTotal.innerText = resultTotal.innerText
                  } else {
                        var total = totalPrice[index].innerText - countPrice[index].innerText
                        totalPrice[index].innerText = total
                        resultTotal.innerText = Number(resultTotal.innerText) - Number(countPrice[index].innerText)
                  }
            }
      })
});

