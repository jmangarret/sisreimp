function iniciar_calendario(fecha,selector)
{ 
  Calendar.setup({
  inputField: fecha,
  ifFormat:   "%d/%m/%Y",
  weekNumbers: false,
  button:     selector
  //displayArea: "fecha",
  //daFormat:    "%A, %d de %B de %Y"
});


}