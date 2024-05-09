const button = document.getElementById("dark-mode");
// const icon = document.getElementById("icon");



function isLocalStorageAvailable() {
  try {
    const testKey = 'test';
    localStorage.setItem(testKey, testKey);
    localStorage.removeItem(testKey);
    return true;
  } catch (e) {
    return false;
  }
}

if (isLocalStorageAvailable()) {
  const prefersDarkMode = localStorage.getItem('darkMode') === 'true';
  document.documentElement.classList.toggle('dark', prefersDarkMode);
}


function darkmode() {
  document.documentElement.classList.toggle('dark');
  const isDarkMode = document.documentElement.classList.contains('dark-mode');
  localStorage.setItem('darkMode', isDarkMode);

  // (icon.classList.contains("fa-moon")) 
  // ? (icon.classList.remove("fa-moon"), icon.classList.add("fa-sun"))  
  // : (icon.classList.add("fa-moon"))

  // (icon.classList.contains("fa-moon"))
  // ? (icon.classList.remove("fa-moon"), icon.classList.add("fa-sun"))
  // : (icon.classList.add("fa-moon"))


}
