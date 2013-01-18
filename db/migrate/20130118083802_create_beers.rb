class CreateBeers < ActiveRecord::Migration
  def change
    create_table :beers do |t|
      t.integer :id
      t.integer :fest_order
      t.string :name
      t.string :style
      t.string :year
      t.decimal :abv
      t.decimal :ibu
      t.decimal :srm
      t.boolean :available
      t.datetime :tapped_at_time
      t.datetime :blown_at_time
      t.string :description
      t.string :beer_url
      t.decimal :avg_rating
      t.integer :tried
      t.references :festival

      t.timestamps
    end
    add_index :beers, :festival_id
  end
end
