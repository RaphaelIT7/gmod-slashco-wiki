<function name="SecondaryItemFunctionOrElse" parent="Player" type="classfunc">
	<description>
		Same as <page>Player:SecondaryItemFunction</page>, but returns the given `fallback` table's values (unpacked) if the callback doesn't return a truthy value.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
	<args>
		<arg name="funcName" type="string">Name of the callback function to call.</arg>
		<arg name="fallback" type="table">Values to return (unpacked) if the callback doesn't return anything truthy.</arg>
		<arg name="..." type="any" optional>Additional arguments passed to the callback.</arg>
	</args>
	<rets>
		<ret name="..." type="any" optional>The callback's return values, or the unpacked `fallback` table.</ret>
	</rets>
</function>
