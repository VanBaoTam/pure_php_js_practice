{
  const hasId = sessionStorage.getItem("id") !== null;
  const hasName = sessionStorage.getItem("name") !== null;
  let resp = document.getElementById("nav");
  let nav = "";
  if (hasId && hasName) {
    nav = `
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item"><a class="nav-link" href="user-management.php">Manage Users</a></li>
              <li class="nav-item"><a class="nav-link" href="product-management.php">Manage Products</a></li>
              <li class="nav-item"><a class="nav-link" href="order-management.php">Manage Orders</a></li>
              <li class="nav-item"><a class="nav-link" href="#" onclick="Logout()">Logout</a></li>
            `;
    resp.innerHTML = nav;
  } else {
    window.location.href = "login.php";
  }
}
