<function name="UnbanSlasher" parent="SlashCo" type="libraryfunc">
	<description>
		Tries to unban the given Slasher
	</description>
	<realm>Server</realm>
	<args>
		<arg name="name" type="string">SlasherID/SlasherName</arg>
	</args>
	<rets>
		<ret name="unbanned" type="boolean">Returns `true` if the given Slasher was unbanned or wasn't banned to begin with</ret>
	</rets>
</function>