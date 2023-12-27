function showCompany() {
    document.getElementById('company').style.display = 'block';
    document.getElementById('buss').style.display = 'none';
    document.getElementById('route').style.display = 'none';
    document.getElementById('schoduil').style.display = 'none';
  }

  function showBus() {
    document.getElementById('buss').style.display = 'block';
    document.getElementById('route').style.display = 'none';
    document.getElementById('company').style.display = 'none';
    document.getElementById('schoduil').style.display = 'none';
  }

  function showRoute() {
    document.getElementById('route').style.display = 'block';
    document.getElementById('company').style.display = 'none';
    document.getElementById('buss').style.display = 'none';
    document.getElementById('schoduil').style.display = 'none';
  }

  function showschoduil() {
    document.getElementById('schoduil').style.display = 'block';
    document.getElementById('route').style.display = 'none';
    document.getElementById('company').style.display = 'none';
    document.getElementById('buss').style.display = 'none';
    
  }
