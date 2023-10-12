<?php

/*
* PHP code generated with wxFormBuilder (version 3.10.1-0-g8feb16b3)
* http://www.wxformbuilder.org/
*
* PLEASE DO *NOT* EDIT THIS FILE!
*/

/*
* Class mainFrame
*/

class mainFrame extends wxFrame {

	function __construct( $parent=null ){
		parent::__construct ( $parent, wxID_ANY, "Book Store", wxDefaultPosition, new wxSize( 1013,710 ), wxDEFAULT_FRAME_STYLE|wxTAB_TRAVERSAL );

		$this->SetSizeHints( wxDefaultSize, wxDefaultSize );

		$bSizerMain = new wxBoxSizer( wxVERTICAL );

		$bSizerMain2 = new wxBoxSizer( wxVERTICAL );

		$this->m_panelMain = new wxPanel( $this, wxID_ANY, wxDefaultPosition, wxDefaultSize, wxTAB_TRAVERSAL );
		$bSizerMain2->Add( $this->m_panelMain, 1, wxEXPAND | wxALL, 0 );


		$bSizerMain->Add( $bSizerMain2, 1, wxALL|wxEXPAND, 0 );


		$this->SetSizer( $bSizerMain );
		$this->Layout();

		$this->Centre( wxBOTH );
	}


	function __destruct( ){
	}

}

?>
