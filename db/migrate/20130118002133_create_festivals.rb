class CreateFestivals < ActiveRecord::Migration
  def change
    create_table :festivals do |t|
      t.integer :id
      t.string :name
      t.date :start_date
      t.date :end_date
      t.string :key
      t.string :fesitval_url
      t.string :tickets_url
      t.string :cause_url
      t.string :banner_url
      t.boolean :link_social
      t.boolean :link_ratings

      t.timestamps
    end
  end
end
