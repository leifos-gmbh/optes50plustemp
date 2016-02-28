<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_maxscript extends HFile{
   function HFile_maxscript(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// MAXScript
/*************************************/
// Flags

$this->nocase            	= "0";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "gray", "purple", "gray", "purple", "brown", "");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("(");
$this->unindent          	= array(")");

// String characters and delimiters

$this->stringchars       	= array("\"", "'");
$this->delimiters        	= array("~", "!", "@", "%", "^", "&", "*", "(", ")", "-", "+", "=", "|", "\\", "{", "}", "[", "]", ";", "\"", "'", " ", ",", "	", "?");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("--");
$this->blockcommenton    	= array("");
$this->blockcommentoff   	= array("");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"about" => "1", 
			"and" => "1", 
			"animate" => "1", 
			"as" => "1", 
			"at" => "1", 
			"by" => "1", 
			"case" => "1", 
			"catch" => "1", 
			"collect" => "1", 
			"continue" => "1", 
			"coordsys" => "3", 
			"do" => "1", 
			"else" => "1", 
			"exit" => "1", 
			"fn" => "1", 
			"for" => "1", 
			"from" => "1", 
			"function" => "1", 
			"global" => "1", 
			"if" => "1", 
			"in" => "1", 
			"local" => "1", 
			"macroscript" => "1", 
			"mapped" => "1", 
			"max" => "1", 
			"material" => "1", 
			"name" => "1", 
			"not" => "1", 
			"of" => "1", 
			"off" => "2", 
			"on" => "2", 
			"or" => "1", 
			"parameters" => "1", 
			"persistent" => "1", 
			"plugin" => "1", 
			"prefix" => "1", 
			"pos" => "1", 
			"pivot" => "1", 
			"parent" => "1", 
			"rcmenu" => "3", 
			"return" => "1", 
			"rollout" => "1", 
			"rotation" => "1", 
			"set" => "1", 
			"struct" => "1", 
			"scale" => "1", 
			"target" => "1", 
			"then" => "1", 
			"throw" => "1", 
			"to" => "1", 
			"tool" => "1", 
			"try" => "1", 
			"transform" => "1", 
			"undo" => "1", 
			"utility" => "3", 
			"when" => "1", 
			"where" => "1", 
			"while" => "1", 
			"with" => "1", 
			"1Button" => "2", 
			"MAX" => "2", 
			"activeGrid" => "2", 
			"altKey" => "2", 
			"ambientColor" => "2", 
			"ambientColorController" => "2", 
			"animButtonEnabled" => "2", 
			"animButtonState" => "2", 
			"animationRange" => "2", 
			"backgroundColor" => "2", 
			"backgroundColorController" => "2", 
			"backgroundImageFileName" => "2", 
			"black" => "2", 
			"blue" => "2", 
			"brown" => "2", 
			"ctrlKey" => "2", 
			"cui.commandPanelOpen" => "2", 
			"currentMaterialLibrary" => "2", 
			"currentTime" => "2", 
			"displayGamma" => "3", 
			"displaySafeFrames" => "3", 
			"doDisabled" => "2", 
			"dontcollect" => "2", 
			"editorFont" => "2", 
			"editorFontSize" => "2", 
			"editorTabWidth" => "2", 
			"environmentMap" => "2", 
			"escapeEnable" => "2", 
			"false" => "2", 
			"fileInGamma" => "3", 
			"fileOutGamma" => "3", 
			"flyOffTime" => "2", 
			"frameRate" => "2", 
			"globalTracks" => "2", 
			"gray" => "2", 
			"green" => "2", 
			"gridDist" => "2", 
			"hardwareLockID" => "2", 
			"heapFree" => "2", 
			"heapSize" => "2", 
			"hotspotAngleSeparation" => "2", 
			"inputTextColor" => "2", 
			"keyboard.Pressed" => "2", 
			"keyboard.altPressed" => "2", 
			"keyboard.controlPressed" => "2", 
			"lightLevel" => "2", 
			"lightLevelController" => "2", 
			"lightTintColor" => "2", 
			"lightTintColorController" => "2", 
			"localTime" => "2", 
			"logsystem.quietmode" => "2", 
			"mButton" => "2", 
			"maxFileName" => "2", 
			"maxFilePath" => "2", 
			"meditMaterials" => "2", 
			"mesh" => "2", 
			"messageTextColor" => "2", 
			"nodeTM" => "2", 
			"numAtmospherics" => "2", 
			"numEffects" => "2", 
			"numSubObjectLevels" => "2", 
			"ok" => "2", 
			"orange" => "2", 
			"outputTextColor" => "2", 
			"playActiveOnly" => "2", 
			"preferences.constantReferenceSystem" => "2", 
			"preferences.flyOffTime" => "2", 
			"preferences.maximumGBufferLayer" => "2", 
			"preferences.spinnerWrap" => "2", 
			"preferences.useLargeVertexDots" => "2", 
			"preferences.useTransformGizmos" => "2", 
			"preferences.useVertexDots" => "2", 
			"rButton" => "2", 
			"realTimePlayback" => "2", 
			"red" => "2", 
			"rendOutputFilename" => "2", 
			"renderDisplacements" => "2", 
			"renderEffects" => "2", 
			"renderHeight" => "2", 
			"renderPixelAspect" => "2", 
			"renderWidth" => "2", 
			"renderer" => "2", 
			"rootNode" => "2", 
			"scanlineRender.antiAliasFilter" => "2", 
			"scanlineRender.antiAliasFilterSize" => "2", 
			"scanlineRender.enablePixelSampler" => "2", 
			"sceneMaterials" => "2", 
			"scriptsPath" => "2", 
			"seEnvironmentMap" => "2", 
			"selectionSets" => "2", 
			"shiftKey" => "2", 
			"showEndResult" => "2", 
			"skipRenderedFrames" => "2", 
			"sliderTime" => "2", 
			"snapMode.active" => "2", 
			"snapMode.type" => "2", 
			"stackLimit" => "2", 
			"subObjectLevel" => "2", 
			"ticksPerFrame" => "2", 
			"timeConfiguration.playActiveOnly" => "2", 
			"timeConfiguration.realTimePlayback" => "2", 
			"timeConfiguration.useTrackBar" => "2", 
			"trackViewNodes" => "2", 
			"trackbar.filter" => "2", 
			"trackbar.visible" => "2", 
			"true" => "2", 
			"undefined" => "2", 
			"unsupplied" => "2", 
			"videoPostTracks" => "2", 
			"viewPoint" => "2", 
			"viewport.activeViewport" => "2", 
			"viewport.numViews" => "2", 
			"white" => "2", 
			"worldAngle" => "2", 
			"worldPoint" => "2", 
			"yellow" => "2", 
			"#2D" => "3", 
			"#2_5D" => "3", 
			"#3D" => "3", 
			"#TMOnly" => "3", 
			"#all" => "3", 
			"#allEdges" => "3", 
			"#allkeys" => "3", 
			"#angle" => "3", 
			"#angleTab" => "3", 
			"#animatedTracks" => "3", 
			"#arrow" => "3", 
			"#asterisk" => "3", 
			"#backcull" => "3", 
			"#baseObjects" => "3", 
			"#bigBox" => "3", 
			"#bitmapTab" => "3", 
			"#blue" => "3", 
			"#boolTab" => "3", 
			"#boolean" => "3", 
			"#boxMode" => "3", 
			"#center" => "3", 
			"#circle" => "3", 
			"#clear" => "3", 
			"#color" => "3", 
			"#colorChannel" => "3", 
			"#colorChannelTab" => "3", 
			"#colorTab" => "3", 
			"#colorVerts" => "3", 
			"#constant" => "3", 
			"#contents" => "3", 
			"#controllerTypes" => "3", 
			"#coverage" => "3", 
			"#create" => "3", 
			"#currentTM" => "3", 
			"#curveX" => "3", 
			"#curveY" => "3", 
			"#curveZ" => "3", 
			"#custom" => "3", 
			"#cycle" => "3", 
			"#default" => "3", 
			"#diamond" => "3", 
			"#display" => "3", 
			"#draft" => "3", 
			"#driverConfig" => "3", 
			"#dualPlanes" => "3", 
			"#fast" => "3", 
			"#filename" => "3", 
			"#filenameTab" => "3", 
			"#fill" => "3", 
			"#flat" => "3", 
			"#float" => "3", 
			"#floatTab" => "3", 
			"#geomAccel" => "3", 
			"#green" => "3", 
			"#grid" => "3", 
			"#hideCameras" => "3", 
			"#hideGeometry" => "3", 
			"#hideHelpers" => "3", 
			"#hideLights" => "3", 
			"#hideShapes" => "3", 
			"#hideSpacewarps" => "3", 
			"#hieracthy" => "3", 
			"#hierarchy" => "3", 
			"#hollowBox" => "3", 
			"#horizontal" => "3", 
			"#hybrid" => "3", 
			"#illum" => "3", 
			"#image" => "3", 
			"#inactive" => "3", 
			"#incNone" => "3", 
			"#incrUpdate" => "3", 
			"#instanceOnly" => "3", 
			"#intTab" => "3", 
			"#integer" => "3", 
			"#left" => "3", 
			"#lighting" => "3", 
			"#line" => "3", 
			"#linear" => "3", 
			"#local" => "3", 
			"#localOnly" => "3", 
			"#loop" => "3", 
			"#maps" => "3", 
			"#mat" => "3", 
			"#matID" => "3", 
			"#material" => "3", 
			"#materialParameters" => "3", 
			"#materialTab" => "3", 
			"#materialsMaps" => "3", 
			"#mats" => "3", 
			"#maxObject" => "3", 
			"#maxObjectTab" => "3", 
			"#mergeDups" => "3", 
			"#missing" => "3", 
			"#modifiedObjects" => "3", 
			"#modify" => "3", 
			"#motion" => "3", 
			"#mtlEditor" => "3", 
			"#noAtts" => "3", 
			"#noRedraw" => "3", 
			"#node" => "3", 
			"#nodeTab" => "3", 
			"#none" => "3", 
			"#normal" => "3", 
			"#noteTracks" => "3", 
			"#nuscale" => "3", 
			"#object" => "3", 
			"#objectID" => "3", 
			"#objects" => "3", 
			"#other" => "3", 
			"#paintDoesBlit" => "3", 
			"#parent" => "3", 
			"#passDecal" => "3", 
			"#percentTab" => "3", 
			"#perspCorrect" => "3", 
			"#pick" => "3", 
			"#pingpong" => "3", 
			"#plusSign" => "3", 
			"#point" => "3", 
			"#point3" => "3", 
			"#point3Tab" => "3", 
			"#polyEdges" => "3", 
			"#position" => "3", 
			"#positionX" => "3", 
			"#positionY" => "3", 
			"#positionZ" => "3", 
			"#production" => "3", 
			"#prompt" => "3", 
			"#promptDups" => "3", 
			"#radiobtnIndex" => "3", 
			"#radiobtnIndexTab" => "3", 
			"#red" => "3", 
			"#redrawViews" => "3", 
			"#relativeRepeat" => "3", 
			"#render" => "3", 
			"#right" => "3", 
			"#rotation" => "3", 
			"#rotationX" => "3", 
			"#rotationY" => "3", 
			"#rotationZ" => "3", 
			"#scale" => "3", 
			"#scaleX" => "3", 
			"#scaleY" => "3", 
			"#scaleZ" => "3", 
			"#scene" => "3", 
			"#screen" => "3", 
			"#selOnly" => "3", 
			"#select" => "3", 
			"#selectedObjects" => "3", 
			"#selectedTracks" => "3", 
			"#selection" => "3", 
			"#shadeCverts" => "3", 
			"#shaderColor" => "3", 
			"#shaderTransparency" => "3", 
			"#skipDups" => "3", 
			"#smallCircle" => "3", 
			"#smallDiamond" => "3", 
			"#smallHollowBox" => "3", 
			"#smallTriangle" => "3", 
			"#sound" => "3", 
			"#spacewarpBindings" => "3", 
			"#specular" => "3", 
			"#squash" => "3", 
			"#staticValues" => "3", 
			"#step" => "3", 
			"#string" => "3", 
			"#stringTab" => "3", 
			"#summary" => "3", 
			"#swapModel" => "3", 
			"#system" => "3", 
			"#text" => "3", 
			"#texture" => "3", 
			"#texturedBkg" => "3", 
			"#texturemap" => "3", 
			"#texturemapTab" => "3", 
			"#time" => "3", 
			"#timeChange" => "3", 
			"#timeTab" => "3", 
			"#transforms" => "3", 
			"#triStrips" => "3", 
			"#triangle" => "3", 
			"#twoSided" => "3", 
			"#txtCorrect" => "3", 
			"#unClamped" => "3", 
			"#universe" => "3", 
			"#uscale" => "3", 
			"#utility" => "3", 
			"#velocity" => "3", 
			"#vertTicks" => "3", 
			"#vertical" => "3", 
			"#videoPost" => "3", 
			"#view" => "3", 
			"#virtualVpts" => "3", 
			"#visibilityTracks" => "3", 
			"#visibleObjects" => "3", 
			"#weight" => "3", 
			"#wireframe" => "3", 
			"#wireframeStrips" => "3", 
			"#world" => "3", 
			"#worldUnitsTab" => "3", 
			"#worldunits" => "3", 
			"#xMarker" => "3", 
			"#zBuffer" => "3", 
			"Adobe_Photoshop_Plug_In_Filter" => "3", 
			"Adobe_Premiere_Video_Filter" => "3", 
			"BombBinding" => "3", 
			"ClearSelection" => "3", 
			"Cubic_Morph_Controller" => "3", 
			"DOSCommand" => "3", 
			"DeflectorBinding" => "3", 
			"DeleteSplineModifier" => "3", 
			"DisplaceBinidng" => "3", 
			"FFD_Binding" => "3", 
			"FLAGS" => "3", 
			"FUNCTIONS" => "3", 
			"Free_point" => "3", 
			"GetAllShortcuts" => "3", 
			"GetBoneName" => "3", 
			"GetCommandName" => "3", 
			"GetCount" => "3", 
			"GetDefaultUIColor" => "3", 
			"GetEndTime" => "3", 
			"GravityBinding" => "3", 
			"MapScaler" => "3", 
			"Morpher" => "3", 
			"MotorMod" => "3", 
			"NCurve_Sel" => "3", 
			"NSurf_Sel" => "3", 
			"NURBSNode" => "3", 
			"PBombMod" => "3", 
			"PDynaFlect" => "3", 
			"PDynaFlectMod" => "3", 
			"POmniFlect" => "3", 
			"POmniFlectMod" => "3", 
			"PathFollowMod" => "3", 
			"PushMod" => "3", 
			"RippleBinding" => "3", 
			"SDeflectMod" => "3", 
			"SDynaFlect" => "3", 
			"SDynaFlectMod" => "3", 
			"SOmineFlect" => "3", 
			"SOmniFlectMod" => "3", 
			"SimpleOSMToWSMMod" => "3", 
			"SpaceCameraMap" => "3", 
			"SpaceConform" => "3", 
			"SpacePatchDeform" => "3", 
			"SpacePathDeform" => "3", 
			"SpaceSurfDeform" => "3", 
			"Target_point" => "3", 
			"Terrain" => "3", 
			"UCurve" => "3", 
			"UDeflectorMod" => "3", 
			"UDynaFlect" => "3", 
			"UDynaFlectMod" => "3", 
			"UOmniFlect" => "3", 
			"UOmniFlectMod" => "3", 
			"Vertex_Colors" => "3", 
			"WaveBinding" => "3", 
			"WindBinding" => "3", 
			"_point3" => "3", 
			"abs" => "3", 
			"acos" => "3", 
			"add" => "3", 
			"addASec" => "3", 
			"addAndWeld" => "3", 
			"addAtmospheric" => "3", 
			"addCam" => "3", 
			"addEaseCurve" => "3", 
			"addEffect" => "3", 
			"addFocalNode" => "3", 
			"addGlow" => "3", 
			"addKnot" => "3", 
			"addLight" => "3", 
			"addLightNode" => "3", 
			"addMSec" => "3", 
			"addModToSelection" => "3", 
			"addModifier" => "3", 
			"addMorphTarget" => "3", 
			"addMultiplerCurve" => "3", 
			"addNURBSSet" => "3", 
			"addNewKey" => "3", 
			"addNewNoteKey" => "3", 
			"addNewSpline" => "3", 
			"addNewXRefFile" => "3", 
			"addNewsXRefObject" => "3", 
			"addNoteTrack" => "3", 
			"addPluginRollouts" => "3", 
			"addProperty" => "3", 
			"addQuad" => "3", 
			"addRay" => "3", 
			"addRing" => "3", 
			"addRollout" => "3", 
			"addScript" => "3", 
			"addStar" => "3", 
			"addStreak" => "3", 
			"addTrackViewController" => "3", 
			"addTri" => "3", 
			"affect_region" => "3", 
			"allowBlending" => "3", 
			"anchor" => "3", 
			"animateAll" => "3", 
			"animateVertex" => "3", 
			"append" => "3", 
			"appendCurve" => "3", 
			"appendCurveByID" => "3", 
			"appendGizmo" => "3", 
			"appendObject" => "3", 
			"appendSubSelSet" => "3", 
			"appendUCurveByID" => "3", 
			"appendVCurve" => "3", 
			"appendVCurveByID" => "3", 
			"applyEaseCurve" => "3", 
			"applyOffset" => "3", 
			"apropos" => "3", 
			"arbAxis" => "3", 
			"arc" => "3", 
			"asin" => "3", 
			"atan" => "3", 
			"atan2" => "3", 
			"attach" => "3", 
			"attachMultiple" => "3", 
			"attachObjects" => "3", 
			"attemptUnresolvedXRefs" => "3", 
			"audioClip" => "3", 
			"audiofloat" => "3", 
			"audiopoint3" => "3", 
			"audioposition" => "3", 
			"audiorotation" => "3", 
			"audioscale" => "3", 
			"autoEdge" => "3", 
			"averageSelVertCenter" => "3", 
			"averageSelVertNormal" => "3", 
			"awning" => "3", 
			"axisTripodLocked" => "3", 
			"background" => "3", 
			"bend" => "3", 
			"bevel" => "3", 
			"bevel_profile" => "3", 
			"bezier" => "3", 
			"bezier_color" => "3", 
			"bezier_float" => "3", 
			"bezier_position" => "3", 
			"bezier_rotation" => "3", 
			"bezier_scale" => "3", 
			"bifold" => "3", 
			"billboard" => "3", 
			"bindKnot" => "3", 
			"bindSpaceWarp" => "3", 
			"bitmap" => "3", 
			"blizzard" => "3", 
			"bomb" => "3", 
			"bone" => "3", 
			"boolObj.createBooleanObject" => "3", 
			"box" => "3", 
			"boxGizmo" => "3", 
			"boxPickNode" => "3", 
			"break" => "3", 
			"breakCurve" => "3", 
			"breakSurface" => "3", 
			"broadcastCallback" => "3", 
			"buildTVFaces" => "3", 
			"buildVCFaces" => "3", 
			"button" => "3", 
			"c_ext" => "3", 
			"camPoint" => "3", 
			"camera_map" => "3", 
			"canConvertTo" => "3", 
			"cap_holes" => "3", 
			"capsule" => "3", 
			"casement" => "3", 
			"ceil" => "3", 
			"chamferbox" => "3", 
			"chamfercyl" => "3", 
			"checkForSave" => "3", 
			"checkbox" => "3", 
			"checkbutton" => "3", 
			"circle" => "3", 
			"circlePickNode" => "3", 
			"classOf" => "3", 
			"clear" => "3", 
			"clearAllAppData" => "3", 
			"clearCurSelSet" => "3", 
			"clearEdgeVertices" => "3", 
			"clearFilter" => "3", 
			"clearListener" => "3", 
			"clearNodeSelection" => "3", 
			"clearProdTess" => "3", 
			"clearScreen" => "3", 
			"clearSubSelSets" => "3", 
			"clearUndoBuffer" => "3", 
			"clearViewTess" => "3", 
			"close" => "7", 
			"closeLog" => "3", 
			"closeRolloutFloater" => "3", 
			"closeU" => "3", 
			"closeUtility" => "3", 
			"closeV" => "3", 
			"collapse" => "3", 
			"collapseFace" => "3", 
			"collapseStack" => "3", 
			"colorpicker" => "3", 
			"combobox" => "3", 
			"compass" => "3", 
			"completeRedraw" => "3", 
			"composite" => "3", 
			"cone" => "3", 
			"configureBitmapPaths" => "3", 
			"conformSpaceWarp" => "3", 
			"conformToShape" => "3", 
			"conjugate" => "3", 
			"contains" => "3", 
			"convertTo" => "3", 
			"convertToMesh" => "3", 
			"convertToNURBSCurve" => "3", 
			"convertToNURBSSurface" => "3", 
			"convertToRigid" => "3", 
			"convertToSplineShape" => "3", 
			"copy" => "3", 
			"copyfile" => "3", 
			"cos" => "3", 
			"cosh" => "3", 
			"count" => "3", 
			"createBooleanObject" => "3", 
			"createFile" => "3", 
			"createInstance" => "3", 
			"createLockKey" => "3", 
			"createMorphObject" => "3", 
			"createOLEObject" => "3", 
			"createPreview" => "3", 
			"createReaction" => "3", 
			"createShapeFromEdges" => "3", 
			"cross" => "3", 
			"crossSection" => "3", 
			"curveLength" => "3", 
			"cycle" => "3", 
			"cylGizmo" => "3", 
			"cylinder" => "3", 
			"damper" => "3", 
			"defaultVCFaces" => "3", 
			"deflector" => "3", 
			"degToRad" => "3", 
			"delete" => "3", 
			"deleteAllChangeHandlers" => "3", 
			"deleteAllXRefs" => "3", 
			"deleteAppData" => "3", 
			"deleteAtmosheric" => "3", 
			"deleteCam" => "3", 
			"deleteCamByName" => "3", 
			"deleteChangeHandler" => "3", 
			"deleteEaseCurve" => "3", 
			"deleteEffect" => "3", 
			"deleteElement" => "3", 
			"deleteElementByName" => "3", 
			"deleteFace" => "3", 
			"deleteFile" => "3", 
			"deleteFocalNode" => "3", 
			"deleteFocalNodeByName" => "3", 
			"deleteGizmo" => "3", 
			"deleteItem" => "3", 
			"deleteKey" => "3", 
			"deleteKeys" => "3", 
			"deleteKnot" => "3", 
			"deleteLight" => "3", 
			"deleteLightByName" => "3", 
			"deleteMesh" => "3", 
			"deleteModifier" => "3", 
			"deleteMorphTarget" => "3", 
			"deleteMultiplierCurve" => "3", 
			"deleteNoteKey" => "3", 
			"deleteNoteKeys" => "3", 
			"deleteNoteTrack" => "3", 
			"deleteObjects" => "3", 
			"deleteProperty" => "3", 
			"deleteReaction" => "3", 
			"deleteSplie" => "3", 
			"deleteTime" => "3", 
			"deleteTrackViewController" => "3", 
			"deleteTrackViewNode" => "3", 
			"deleteVert" => "3", 
			"dependents" => "3", 
			"deselect" => "3", 
			"deselectHiddenEdges" => "3", 
			"deselectHiddenFaces" => "3", 
			"deselectJey" => "3", 
			"deselectKeys" => "3", 
			"deselectNode" => "3", 
			"detach" => "3", 
			"directionalLight" => "3", 
			"disableSceneRedraw" => "3", 
			"disableStatusXYZ" => "3", 
			"disconnect" => "3", 
			"disp_approx" => "3", 
			"displace" => "3", 
			"displace_Mesh" => "3", 
			"displace_NURBS" => "3", 
			"display" => "3", 
			"displayTempPrompt" => "3", 
			"distance" => "3", 
			"divide" => "3", 
			"donut" => "3", 
			"dot" => "3", 
			"dropdownlist" => "3", 
			"dummy" => "3", 
			"edit" => "3", 
			"editAtmosphere" => "3", 
			"editAtmospheric" => "3", 
			"editEffect" => "3", 
			"edit_mesh" => "3", 
			"edit_patch" => "3", 
			"edit_spline" => "3", 
			"edittext" => "3", 
			"elargeUpdateRect" => "3", 
			"ellipse" => "3", 
			"empty" => "3", 
			"enableCoordCenter" => "3", 
			"enableEscape" => "3", 
			"enableORTs" => "3", 
			"enablePixelSampler" => "3", 
			"enableRefCoordSys" => "3", 
			"enableSceneRedraw" => "3", 
			"enableShowEndRes" => "3", 
			"enableStatusXYZ" => "3", 
			"enableSubObjSel" => "3", 
			"enableUndo" => "3", 
			"encryptFile" => "3", 
			"encryptScript" => "3", 
			"enumerateFiles" => "3", 
			"eof" => "3", 
			"evalPos" => "3", 
			"evalTangent" => "3", 
			"evalUTangents" => "3", 
			"evalVTangents" => "3", 
			"exclusionListDlg" => "3", 
			"execute" => "3", 
			"exitrude" => "3", 
			"exp" => "3", 
			"explode" => "3", 
			"explodeGroup" => "3", 
			"exportFile" => "3", 
			"extrudeFace" => "3", 
			"face_extrude" => "3", 
			"fencePickNode" => "3", 
			"fetchMaxFile" => "3", 
			"ffdBox" => "3", 
			"ffdCyl" => "3", 
			"ffd_2x2x2" => "3", 
			"ffd_3x3x3" => "3", 
			"ffd_4x4x4" => "3", 
			"ffd_select" => "3", 
			"fileIn" => "3", 
			"filePos" => "3", 
			"fileProperties" => "3", 
			"fileSaveAsMatLib" => "3", 
			"fileSaveMatLib" => "3", 
			"filenameFromPath" => "3", 
			"fileopenMathLib" => "3", 
			"fillet_chamfer" => "3", 
			"filterString" => "3", 
			"findItem" => "3", 
			"findProperty" => "3", 
			"findString" => "3", 
			"findUnresolvedXrefs" => "3", 
			"fixed" => "3", 
			"flagChanged" => "3", 
			"flagForeground" => "3", 
			"flashNodes" => "3", 
			"flex" => "3", 
			"flipNormal" => "3", 
			"float_expression" => "3", 
			"float_list" => "3", 
			"float_motion_capture" => "3", 
			"floor" => "3", 
			"flush" => "3", 
			"flushLog" => "3", 
			"fogHelper" => "3", 
			"foliage" => "3", 
			"forceCompleteRedraw" => "3", 
			"format" => "3", 
			"fractalNoise" => "3", 
			"freeSceneBitmaps" => "3", 
			"freeSpot" => "3", 
			"freecamera" => "3", 
			"freeze" => "3", 
			"gc" => "3", 
			"genClassID" => "3", 
			"gengon" => "3", 
			"geosphere" => "3", 
			"get" => "3", 
			"getActiveCamera" => "3", 
			"getAfterORT" => "3", 
			"getAppData" => "3", 
			"getAtmospheric" => "3", 
			"getBackGroundController" => "3", 
			"getBefore" => "3", 
			"getBipedExportInterface" => "3", 
			"getBkgFrameNum" => "3", 
			"getBkgImageAnim" => "3", 
			"getBkgImageAspect" => "3", 
			"getBkgORType" => "3", 
			"getBkgRangeVal" => "3", 
			"getBkgStartTime" => "3", 
			"getBkgSyncFrame" => "3", 
			"getBoolCutType" => "3", 
			"getBoolOP" => "3", 
			"getCPDisp" => "3", 
			"getCPTM" => "3", 
			"getCV" => "3", 
			"getCVertModel" => "3", 
			"getCamera" => "3", 
			"getChannel" => "3", 
			"getChannelAsMask" => "3", 
			"getCommandPanelTaksMode" => "3", 
			"getConfigFile" => "3", 
			"getCoordCenter" => "3", 
			"getCrossing" => "3", 
			"getCurrentObject" => "3", 
			"getCurrentSelection" => "3", 
			"getCurve" => "3", 
			"getCurveID" => "3", 
			"getCurveStartPoint" => "3", 
			"getDimensions" => "3", 
			"getDir" => "3", 
			"getDirectories" => "3", 
			"getDisplacementMapping" => "3", 
			"getDisplayResult" => "3", 
			"getDriverString" => "3", 
			"getEdge" => "3", 
			"getEdgeSelection" => "3", 
			"getEdgeVis" => "3", 
			"getEffect" => "3", 
			"getEulerMatAngleRatio" => "3", 
			"getEulerQuatAngleRation" => "3", 
			"getF/C5" => "3", 
			"getFace" => "3", 
			"getFaceMatID" => "3", 
			"getFaceNormal" => "3", 
			"gravity" => "3", 
			"grid" => "3", 
			"hedra" => "3", 
			"helix" => "3", 
			"inline" => "3", 
			"inlineHelper" => "3", 
			"l_ext" => "3", 
			"label" => "3", 
			"lathe" => "3", 
			"lattice" => "3", 
			"line" => "3", 
			"linear_float" => "3", 
			"linear_position" => "3", 
			"linear_rotation" => "3", 
			"linear_scale" => "3", 
			"link_control" => "3", 
			"linked_xform" => "3", 
			"listbox" => "3", 
			"lod" => "3", 
			"lodHelper" => "3", 
			"lookat" => "3", 
			"macroScript" => "3", 
			"mapbutton" => "3", 
			"materialByElement" => "3", 
			"materialModifier" => "3", 
			"materialbutton" => "3", 
			"maxVersion" => "3", 
			"melt" => "3", 
			"meshSmooth" => "3", 
			"mesh_select" => "3", 
			"mirror" => "3", 
			"modPanel.addModToSelection" => "3", 
			"moise_point3" => "3", 
			"motor" => "3", 
			"navInfo" => "3", 
			"ngon" => "3", 
			"noiseModifier" => "3", 
			"noise_float" => "3", 
			"noise_positi/C4" => "3", 
			"normalModifier" => "3", 
			"normalize_spray" => "3", 
			"notetrack" => "3", 
			"oiltank" => "3", 
			"omniLight" => "3", 
			"optimize" => "3", 
			"parray" => "3", 
			"patch" => "3", 
			"patchDeform" => "3", 
			"pathDeform" => "3", 
			"path_Follow" => "3", 
			"pbomb" => "3", 
			"pcloud" => "3", 
			"pickbutton" => "3", 
			"pivoted" => "3", 
			"plane" => "3", 
			"point" => "3", 
			"point3_expression" => "3", 
			"point3_list" => "3", 
			"point3_motion_capture" => "3", 
			"position_expression" => "3", 
			"position_list" => "3", 
			"position_motion_capture" => "3", 
			"preserve" => "3", 
			"prism" => "3", 
			"progressBar" => "3", 
			"projected" => "3", 
			"protractor" => "3", 
			"proxSensor" => "3", 
			"prs" => "3", 
			"push" => "3", 
			"pyramid" => "3", 
			"quadpatch" => "3", 
			"radiobuttons" => "3", 
			"railing" => "3", 
			"rectangle" => "3", 
			"relax" => "3", 
			"ringwave" => "3", 
			"ripple" => "3", 
			"rotation_list" => "3", 
			"rotation_motion_capture" => "3", 
			"scale_expression" => "3", 
			"scale_list" => "3", 
			"scale_motion_capture" => "3", 
			"sdeflector" => "3", 
			"section" => "3", 
			"skew" => "3", 
			"skin" => "3", 
			"sliceModifier" => "3", 
			"slider" => "3", 
			"slidingDoor" => "3", 
			"slidingWindow" => "3", 
			"smooth" => "3", 
			"snow" => "3", 
			"sound" => "3", 
			"spaceBend" => "3", 
			"spaceDisplace" => "3", 
			"spaceFFDBox" => "3", 
			"spaceFFDCyl" => "3", 
			"spaceNoise" => "3", 
			"spaceRipple" => "3", 
			"spaceSkew" => "3", 
			"spaceStretch" => "3", 
			"spaceTaper" => "3", 
			"spaceTwist" => "3", 
			"spaceWave" => "3", 
			"spearator" => "3", 
			"sphere" => "3", 
			"sphereGizmo" => "3", 
			"spherify" => "3", 
			"spindle" => "3", 
			"spinner" => "3", 
			"splineSelect" => "3", 
			"spray" => "3", 
			"spring" => "3", 
			"squeeze" => "3", 
			"star" => "3", 
			"stl_check" => "3", 
			"stretch" => "3", 
			"submenu" => "3", 
			"substitute" => "3", 
			"superspray" => "3", 
			"surface" => "3", 
			"surface_mapper" => "3", 
			"surfdeform" => "3", 
			"tape" => "3", 
			"taper" => "3", 
			"targetCamera" => "3", 
			"targetDirectionalLight" => "3", 
			"targetSoit" => "3", 
			"targetobject" => "3", 
			"teapot" => "3", 
			"tesselate" => "3", 
			"text" => "3", 
			"timeSensor" => "3", 
			"timer" => "3", 
			"torus" => "3", 
			"torus_knot" => "3", 
			"touchSensor" => "3", 
			"trim_extend" => "3", 
			"tripatch" => "3", 
			"tube" => "3", 
			"twist" => "3", 
			"uDeflector" => "3", 
			"unwrap_UVW" => "3", 
			"uvmap" => "3", 
			"uvw_xform" => "3", 
			"vertexPaint" => "3", 
			"volumeselect" => "3", 
			"vrml_vrbl" => "3", 
			"wave" => "3", 
			"wind" => "3", 
			"xform" => "3", 
			"xrefs.addNewXRefObject" => "3", 
			"!=" => "6", 
			"#" => "6", 
			"$" => "6", 
			"&" => "6", 
			"'" => "6", 
			"(" => "6", 
			")" => "6", 
			"*" => "6", 
			"*=" => "6", 
			"+" => "6", 
			"+=" => "6", 
			"," => "6", 
			"-" => "6", 
			"--" => "6", 
			"-=" => "6", 
			"." => "6", 
			".." => "6", 
			"..." => "6", 
			"//" => "6", 
			"/" => "6", 
			"/=" => "6", 
			":" => "6", 
			";" => "6", 
			"<" => "6", 
			"<=" => "6", 
			"<eol>" => "6", 
			"=" => "6", 
			"==" => "6", 
			">" => "6", 
			">=" => "6", 
			"?" => "6", 
			"[" => "6", 
			"\\" => "6", 
			"]" => "6", 
			"^" => "6", 
			"{" => "6", 
			"}" => "6", 
			"buildMesh" => "7", 
			"changed" => "7", 
			"create" => "7", 
			"entered" => "7", 
			"moved" => "7", 
			"open" => "7", 
			"picked" => "7", 
			"preApply" => "7", 
			"pressed" => "7", 
			"resized" => "7", 
			"selected" => "7", 
			"simpleObject" => "7", 
			"controller" => "8", 
			".value" => "8", 
			".range" => "8", 
			".text" => "8", 
			".checked" => "8", 
			".enabled" => "8", 
			".time" => "8", 
			".selected" => "8", 
			".inTangent" => "8", 
			".outTangent" => "8", 
			".inTangentType" => "8", 
			".outTangentType" => "8", 
			".x_locked" => "8", 
			".y_locked" => "8", 
			".z_locked" => "8", 
			".constantVelocity" => "8", 
			".steps" => "8", 
			".optimize" => "8", 
			".thickness" => "8", 
			".mapCoords" => "8", 
			".adaptive" => "8", 
			".renderable" => "8", 
			".radius" => "8", 
			".segs" => "8", 
			".smooth" => "8", 
			"alias:" => "9", 
			"animatable:" => "9", 
			"checked:" => "9", 
			"classID:" => "9", 
			"controller:" => "9", 
			"default:" => "9", 
			"enabled:" => "9", 
			"errPrompt:" => "9", 
			"extends:" => "9", 
			"fieldwidth:" => "9", 
			"filter:" => "9", 
			"framerange:" => "9", 
			"handleAt:" => "9", 
			"height:" => "9", 
			"highlightColor:" => "9", 
			"id:" => "9", 
			"invisible:" => "9", 
			"keyword:" => "9", 
			"label:" => "9", 
			"map:" => "9", 
			"material:" => "9", 
			"name:" => "9", 
			"orient:" => "9", 
			"outputwidth:" => "9", 
			"pos:" => "9", 
			"prompt:" => "9", 
			"range:" => "9", 
			"replaceUI:" => "9", 
			"rolledUp:" => "9", 
			"scale:" => "9", 
			"silentErrors:" => "9", 
			"snap:" => "9", 
			"subAnim:" => "9", 
			"tabSize:" => "9", 
			"tabSizeVariable:" => "9", 
			"terminators:" => "9", 
			"ticks:" => "9", 
			"tooltip:" => "9", 
			"type:" => "9", 
			"ui:" => "9", 
			"version:" => "9", 
			"vfb:" => "9", 
			"width:" => "9");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"3" => "donothing", 
			"2" => "donothing", 
			"7" => "donothing", 
			"6" => "donothing", 
			"8" => "donothing", 
			"9" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
