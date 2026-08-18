<function name="SQLTableToLuaTable" parent="SlashCo" type="libraryfunc">
	<description>
		Converts a sequential SQL result table into a keyed Lua table.<br>
		The value of the specified column is used as the key for each row.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="data" type="table">Sequential table of SQL result rows</arg>
		<arg name="keyName" type="string">Name of the column to use as the resulting table key</arg>
	</args>
	<rets>
		<ret name="resultTable" type="table">Table containing the original rows indexed by the requested column value</ret>
	</rets>
</function>