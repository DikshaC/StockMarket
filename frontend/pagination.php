<?php
/**
 * Created by PhpStorm.
 * User: dchha
 * Date: 3/23/2019
 * Time: 5:04 PM
 */

class pagination
{
    private $_conn;
    private $_limit;
    private $_page;
    private $_query;
    private $_total;

    public function __construct( $conn, $query )
    {

        $this->_conn = $conn;
        $this->_query = $query;

        $rs = $this->_conn->query($this->_query);

        $this->_total = $rs->num_rows;

    }

    public function getData( $limit = 3, $page = 1 )
    {
        $results = [];
        $this->_limit = $limit;
        $this->_page = $page;

        if ($this->_limit == 'all') {
            $query = $this->_query;
        } else {
            $query = $this->_query . " LIMIT " . (($this->_page - 1) * $this->_limit) . ", $this->_limit";
        }
        $rs = $this->_conn->query($query);

        while ($row = $rs->fetch_assoc()) {
            $results[] = $row;
        }

        $result = new stdClass();
        $result->page = $this->_page;
        $result->limit = $this->_limit;
        $result->total = $this->_total;
        $result->data = $results;

        return $result;
    }

    public function createLinks( $list_class ) {
        if ( $this->_limit == 'all' ) {
            return '';
        }

        $last       = ceil( $this->_total / $this->_limit );

        //$start      = ( ( $this->_page - $links ) > 0 ) ? $this->_page - $links : 1;
        //$end        = ( ( $this->_page + $links ) < $last ) ? $this->_page + $links : $last;

        $html       = ' <ul class="pagination justify-content-center">';

        $class      = ( $this->_page == 1 ) ? "disabled page-item" : "page-item";
        $clss = "page-link";
        $html       .= '<li class="' . $class . '"><a class="'. $clss . '"href="?limit=' . $this->_limit . '&page=' . ( $this->_page - 1 ) . '">&laquo;</a></li>';

        //if ( $start > 1 ) {
          //  $html   .= '<li><a href="?limit=' . $this->_limit . '&page=1">1</a></li>';
            //$html   .= '<li class="disabled"><span>...</span></li>';
        //}

        for ( $i = 1 ; $i <= $last; $i++ ) {

            $class  = ( $this->_page == $i ) ? "active page-item" : "page-item";
            $html   .= '<li class="' . $class . '"><a class="'. $clss . '"href="?limit=' . $this->_limit . '&page=' . $i . '">' . $i . '</a></li>';
        }

        //if ( $end < $last ) {
        //    $html   .= '<li class="disabled"><span>...</span></li>';
        //    $html   .= '<li><a href="?limit=' . $this->_limit . '&page=' . $last . '">' . $last . '</a></li>';
        //}

        $class      = ( $this->_page == $last ) ? "disabled page-item" : "page-item";
        $html       .= '<li class="' . $class . '"><a class="'. $clss . '"href="?limit=' . $this->_limit . '&page=' . ( $this->_page + 1 ) . '">&raquo;</a></li>';

        $html       .= '</ul>';

        return $html;
    }
}