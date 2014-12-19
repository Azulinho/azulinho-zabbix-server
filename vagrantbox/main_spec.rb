require_relative 'spec_helper'

describe service('zabbix-server') do
  it { should be_running }
  it { should be_enabled }
end
