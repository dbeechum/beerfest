class Festival < ActiveRecord::Base

def self.currentFests
p "wee!"
self.find(:all, :conditions=>["end_date >= ?",Date.today])
end

end
