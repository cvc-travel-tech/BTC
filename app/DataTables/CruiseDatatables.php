<?php

namespace App\DataTables;

use App\Cruise;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;

class CruiseDatatables extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)
            ->editColumn('name', '<a href="{{route("admin.cruise.edit" , $slug)}}"> {{$name}}</a>')
            ->addColumn('action', 'cruisedatatables.action')
            ->rawColumns(['name', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Cruise $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Cruise $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('cruises-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(2)

            ->parameters([
                'responsive' => true,
                'autoWidth' => false,
                // 'serverSide' =>  false

                // 'lengthMenu' => [
                //     [10, 25, 50, -1],
                //     ['10 rows', '25 rows', '50 rows', 'Show all']
                // ],

            ])
            ->lengthMenu([
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ])

            ->buttons(
                Button::make('create'),
                Button::make(['export']),

                Button::make('print'),
                Button::make('reload'),
                Button::make('pageLength')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            // Column::computed('action')
            //     ->exportable(false)
            //     ->printable(false)
            //     ->width(60)
            //     ->addClass('text-center'),
            Column::make('id'),
            Column::make('name'),
            // Column::make('description'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'CruiseDatatables_' . date('YmdHis');
    }
}
