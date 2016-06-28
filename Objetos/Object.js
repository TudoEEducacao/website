function ObjectFactory(objectName){
  alert(objectName);
	var outputObject = new PainelLogin();
	if (objectName.toUpperCase().trim() == outputObject.getName()){
		return outputObject;
	}

  outputObject = new BarraLateral();
  if (objectName.toUpperCase().trim() == outputObject.getName()){
      return outputObject;
  }

  outputObject = new Editor();
  if (objectName.toUpperCase().trim() == outputObject.getName()){
              return outputObject;
  }

  outputObject = new ChartRadar();
  if (objectName.toUpperCase().trim() == outputObject.getName()){
              return outputObject;
  }

  outputObject = new saveEditorContentButton();
  if (objectName.toUpperCase().trim() == outputObject.getName()){
              return outputObject;
  }

  outputObject = new barMultiAxis();
  if (objectName.toUpperCase().trim() == outputObject.getName()){
    return outputObject;
  }


    return outputObject;

}
