
  var Key = 'Iambatman';

  function dataEncrypt(string) {
    let encryptedData = '';
    for (let i = 0; i < string.length; i++) {
      encryptedData += String.fromCharCode(string.charCodeAt(i) ^ Key.charCodeAt(i % Key.length));
    }
    return btoa(encryptedData);
  }

  function dataDecrypt(string) {
    encryptedData = atob(string);
    let decryptedData = '';
    for (let i = 0; i < encryptedData.length; i++) {
      decryptedData += String.fromCharCode(encryptedData.charCodeAt(i) ^ Key.charCodeAt(i % Key.length));
    }
    return decryptedData;
  }
